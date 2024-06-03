<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrakerjaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'telpon' => 'required|min:12',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'foto' => 'required|mimes:jpg,png'
        ];



    }

    public function messages(): array{
        return [
            'name.reqired' => 'Data Harus diisikan',
            'email.required' => 'Email tidak boleh dikosong',
            'email.email' => 'email harus yang dimasukkan berupa email',
            'telpon.min' => 'data harus disikan minimal 12 karakter',
            'telpon.required' => 'Telpon tidak boleh kosong',
            'alamat.required' => 'alamat harus disikan',
            'pendidikan_terakhir.required' => 'harus diisikan',
            'foto.mimes' => 'Pastikan FOrmat file benar'
        ];
    }
}
