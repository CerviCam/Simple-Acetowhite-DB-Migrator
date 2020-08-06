<?php

namespace App\Http\Controllers;

use App\V202001ImageAreaMark;
use App\V202001ImageUpload;
use App\V202001User;
use App\V202002ImageAreaMark;
use App\V202002ImageLabel;
use App\V202002ImageUpload;
use App\V202002UserDetails;
use Illuminate\Http\RedirectResponse;

class MigratorController extends Controller
{
    public function migrate(): RedirectResponse
    {
        foreach (V202001User::get() as $user) {
            V202002UserDetails::create([
                'email' => $user->email,
                'is_administrator' => false,
            ]);
        }

        foreach (V202001ImageUpload::get() as $image) {
            V202002ImageUpload::create([
                'filename_pre_iva' => $image->filename_pre_iva,
                'path_pre_iva' => $image->path_pre_iva,
                'filename_post_iva' => $image->filename_post_iva,
                'path_post_iva' => $image->path_post_iva,
                'uploaded_by' => V202001User::where('name', $image->posted_by)->first()->email,
            ]);

            if (!empty($image->edited_by)) {
                V202002ImageLabel::create([
                    'filename' => $image->filename_post_iva,
                    'email' => V202001User::where('name', $image->edited_by)->first()->email,
                    'label' => $image->label,
                    'comment' => $image->comment,
                ]);
            }

            if (!empty(V202001ImageAreaMark::where('filename', $image->filename_post_iva)->first())) {
                foreach (V202001ImageAreaMark::where('filename', $image->filename_post_iva)->get() as $imageMark) {
                    V202002ImageAreaMark::create([
                        'filename' => $image->filename_post_iva,
                        'email' => V202001User::where('name', $image->edited_by)->first()->email,
                        'rect_x0' => $imageMark->rect_x0,
                        'rect_y0' => $imageMark->rect_y0,
                        'rect_x1' => $imageMark->rect_x1,
                        'rect_y1' => $imageMark->rect_y1,
                        'label' => $imageMark->label,
                        'description' => $imageMark->description,
                    ]);
                }
            }
        }

        return redirect()
            ->back()
            ->with('message', 'Proses selesai!');
    }
}
