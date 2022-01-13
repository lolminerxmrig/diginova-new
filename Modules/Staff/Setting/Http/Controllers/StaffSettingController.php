<?php

namespace Modules\Staff\Setting\Http\Controllers;

use App\Models\Media;
use App\Models\State;
use App\Models\StoreAddress;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Setting\Models\Setting;
use Illuminate\Http\Request;

class StaffSettingController extends Controller
{

    public function index()
    {
      $settings = Setting::all();
      $states = State::all();
      $store_addresses = StoreAddress::all();

      if(!is_null($settings->where('name', 'invoice_stamp')->first()->media) 
        && count($settings->where('name', 'invoice_stamp')->first()->media)){
        $stamp_image = $settings->where('name', 'invoice_stamp')->first()->media()->first();
      }
      else {
        $stamp_image = null;
      }

      return view('staffsetting::index', compact('settings', 'states', 'store_addresses', 'stamp_image'));
    }

    public function update(Request $request)
    {
        if ($request->active_tab == 'general') {
          return $this->updateGeneral($request);
        }

        if ($request->active_tab == 'sms') {
          return $this->updateSms($request);
        }

        if ($request->active_tab == 'email') {
          return $this->updateEmail($request);
        }

        if ($request->active_tab == 'advanced') {
          return $this->updateAdvanced($request);
        }

        if ($request->active_tab == 'store') {
          return $this->updateStore($request);
        }

        if ($request->active_tab == 'footer') {
          return $this->updateFooter($request);
        }

        if ($request->active_tab == 'peyment') {
          return $this->updatePeyment($request);
        }

        if ($request->active_tab == 'invoice') {
          return $this->updateInvoice($request);
        }

    }

    public function updateGeneral($request)
    {

        $messages = [
          'fa_store_name.required' => 'وارد کردن نام فارسی فروشگاه اجباری است.',
          'en_store_name.required' => 'وارد کردن نام انگلیسی فروشگاه اجباری است.',
          'site_title.required' => 'وارد کردن عنوان سایت اجباری است.',
        ];

        $validator = Validator::make($request->all(), [
          'fa_store_name' => 'required',
          'en_store_name' => 'required',
          'site_title' => 'required',
          'site_index_status' => 'required',
          'site_url' => 'nullable',
          'index_meta_keywords' => 'nullable',
          'index_meta_description' => 'nullable',
          'logoImageId' => 'nullable',
          'faviconImageId' => 'nullable',
          'symbolImageId' => 'nullable',

          'management_subdomain' => 'nullable',
          'admin_email' => 'required',

        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
              'status' => false,
              'data' => [
                'errors' => $errors,
              ]
            ], 400);
        }

        if (!is_null($request->logoImageId)) {
          $media = Media::find($request->logoImageId);
          $logo = Setting::where('name', 'header_logo')->first();
          $logo->media()->sync($media);
        }

        if (!is_null($request->faviconImageId)) {
          $media = Media::find($request->faviconImageId);
          $favicon= Setting::where('name', 'favicon_image')->first();
          $favicon->media()->sync($media);
        }

        if (!is_null($request->symbolImageId)) {
          $media = Media::find($request->symbolImageId);
          $symbolImageId = Setting::where('name', 'symbol_image')->first();
          $symbolImageId->media()->sync($media);
        }

        $fillable = ['fa_store_name', 'en_store_name', 'site_index_status', 'site_title', 'site_url', 'index_meta_keywords', 'index_meta_description'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable))
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
        }

    }

    public function updateStore($request)
    {

      if (isset($request->deleted_addresses) && (!is_null($request->deleted_addresses))) {
        foreach ($request->deleted_addresses as $deleted_address) {
          StoreAddress::find($deleted_address)->delete();
        }
      }

      $messages = [
        'products_per_page_count.required' => 'وارد کردن تعداد محصولات در هر صفحه اجباری است',
        'product_code_prefix.required' => 'وارد کردن پیشوند کد محصول اجباری است',
        'product_title_prefix.required' => 'وارد کردن پیشوند عنوان محصول اجباری است',
        'store_city.required' => 'وارد کردن محل (شهر) فروشگاه اجباری است',
        'shop_addresses.required_if' => 'در وضعیت انتخابی وارد کردن آدرس فروشگاه اجباری است',
      ];

      $validator = Validator::make($request->all(), [
        'development_mode' => 'required',
        'auto_navigateـtoـcart' => 'required',
        'product_code_prefix' => 'required',
        'product_title_prefix' => 'required',
        'max_add_to_cart_num' => 'nullable',
        'max_shipping_day_count' => 'nullable',
        'products_per_page_count' => 'required',
        'store_city' => 'required',
        'inـpersonـdelivery' => 'required',
        'shop_addresses' => 'nullable|required_if:inـpersonـdelivery,true',
      ], $messages);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json([
          'status' => false,
          'data' => [
            'errors' => $errors,
          ]
        ], 400);
      }

      $fillable = ['development_mode', 'auto_navigateـtoـcart', 'max_add_to_cart_num', 'max_shipping_day_count', 'products_per_page_count', 'inـpersonـdelivery', 'product_code_prefix', 'product_title_prefix'];

      foreach ($request->all() as $key => $item)
      {
        if (in_array($key, $fillable)) {
          Setting::where('name', $key)->update([
            "value" => $item,
          ]);
        }
      }

      $settings = Setting::all();
      $setting = $settings->where('name', 'store_city')->first();
      $city = State::find($request->store_city);
      $setting->states()->sync($city);

      if ($request->inـpersonـdelivery == 'true') {
        foreach ($request->shop_addresses as $key => $address) {
            StoreAddress::updateOrCreate(['id' => isset($request->shop_addresses_id[$key])? $request->shop_addresses_id[$key] : 0 ], [
              'type' => 'shop',
              'address' => $address,
            ]);
        }
      }

    }

    public function updateFooter($request)
    {

        $fillable = ['footer_slogan', 'copyright_text', 'store_phone', 'store_email', 'footer_desc_title', 'footer_description', 'ecunion_link',
        'enamad_link', 'samandehi_link', 'instagram_link', 'twitter_link', 'aparat_link', 'linkedin_link',
        'whatsapp_link', 'telegram_link', 'googleplay_link', 'cafebazaar_link', 'myket_link', 'sibapp_link'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable)) {
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
          }
        }

    }

    public function updateAdvanced($request)
    {
        $fillable = ['custom_header_code', 'custom_footer_code', 'custom_css_code'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable)) {
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
          }
        }
    }

    public function updatePeyment($request)
    {

      $messages = [
        'peyment_success_message.required' => 'وارد کردن متن پیام پرداخت موفق اجباری است',
      ];

      $validator = Validator::make($request->all(), [
        'peyment_success_message' => 'required',
      ], $messages);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json([
          'status' => false,
          'data' => [
            'errors' => $errors,
          ]
        ], 400);
      }

        $fillable = ['peyment_success_message'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable)) {
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
          }
        }
    }

    public function updateEmail($request)
    {
        $messages = [
          'mail_server.required_if' => 'در وضعیت انتخابی وارد کردن سرویس‌دهنده ایمیل اجباری است',
          'mail_port.required_if' => 'در وضعیت انتخابی وارد کردن درگاه ایمیل اجباری است',
          'mail_username.required_if' => 'در وضعیت انتخابی وارد کردن نام کاربری اجباری است',
          'mail_password.required_if' => 'در وضعیت انتخابی وارد کردن کلمه عبور اجباری است',
          'mail_address.required_if' => 'در وضعیت انتخابی وارد کردن آدرس ایمیل اجباری است',
          'order_email_text.required_if' => 'در وضعیت انتخابی وارد کردن متن پیام ثبت موفق سفارش اجباری است',
          'delivery_email_status.required_if' => 'در وضعیت انتخابی وارد کردن وضعیت تحویل کالا اجباری است',
          'delivery_email_text.required_if' => 'در وضعیت انتخابی وارد کردن متن وضعیت تحویل کالا اجباری است',
        ];

        $validator = Validator::make($request->all(), [
          'site_email_status' => 'required',
          'mail_server' => 'nullable|required_if:site_email_status,active',
          'mail_port' => 'nullable|required_if:site_email_status,active',
          'mail_username' => 'nullable|required_if:site_email_status,active',
          'mail_password' => 'nullable|required_if:site_email_status,active',
          'mail_address' => 'nullable|required_if:site_email_status,active',
          'order_email_status' => 'nullable|required_if:site_email_status,active',
          'order_email_text' => 'nullable|required_if:order_email_status,active',

          'delivery_email_status' => 'nullable|required_if:site_email_status,active',
          'delivery_email_text' => 'nullable|required_if:delivery_email_status,active',
          'email_forgot_code_status' => 'nullable|required_if:site_email_status,active',
          'email_reg_code_status' => 'nullable|required_if:site_email_status,active',
        ], $messages);

        if ($validator->fails()) {
          $errors = $validator->errors();
          return response()->json([
            'status' => false,
            'data' => [
              'errors' => $errors,
            ]
          ], 400);
        }

        $fillable = ['site_email_status', 'mail_server', 'mail_port', 'mail_username', 'mail_password', 'mail_address', 'order_email_status',
                     'order_email_text', 'delivery_email_status', 'delivery_email_text', 'email_forgot_code_status', 'email_reg_code_status'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable)) {
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
          }

        }

    }

    public function updateSms($request)
    {
        $messages = [
          'sms_provider.required_if' => 'در وضعیت انتخابی وارد کردن سرویس‌دهنده پیامک اجباری است',
          'api_key.required_if' => 'در وضعیت انتخابی وارد کردن کلید ای پی آی اجباری است',
          'order_sms_text.required_if' => 'در وضعیت انتخابی وارد کردن متن پیام ثبت موفق سفارش اجباری است',
          'sms_sender_number.required_if' => 'در وضعیت انتخابی وارد کردن شماره خط ارسالی اجباری است',
          'delivery_sms_text.required_if' => 'در وضعیت انتخابی وارد کردن متن پیام وضعیت تحویل کالا اجباری است',
        ];

        $validator = Validator::make($request->all(), [
          'site_sms_status' => 'required',
          'sms_provider' => 'nullable|required_if:site_sms_status,active',
          'api_key' => 'nullable|required_if:site_sms_status,active',
          'order_sms_text' => 'nullable|required_if:site_sms_status,active',
          'sms_sender_number' => 'nullable|required_if:site_sms_status,active',
          'delivery_sms_status' => 'nullable|required_if:site_sms_status,active',
          'delivery_sms_text' => 'nullable|required_if:delivery_sms_status,active',
          'sms_forgot_code_status' => 'nullable|required_if:delivery_sms_status,active',
          'sms_reg_code_status' => 'nullable|required_if:delivery_sms_status,active',
        ], $messages);

        if ($validator->fails()) {
          $errors = $validator->errors();
          return response()->json([
            'status' => false,
            'data' => [
              'errors' => $errors,
            ]
          ], 400);
        }

        $fillable = ['site_sms_status', 'sms_provider', 'api_key', 'order_sms_text', 'sms_sender_number', 'delivery_sms_status', 'delivery_sms_text', 'sms_forgot_code_status', 'sms_reg_code_status'];

        foreach ($request->all() as $key => $item)
        {
          if (in_array($key, $fillable)) {
            Setting::where('name', $key)->update([
              "value" => $item,
            ]);
          }
        }
    }

    public function updateInvoice($request)
    {

      $messages = [
        'invoice_title.required' => 'وارد کردن عنوان فاکتور اجباری است.',
      ];

      $validator = Validator::make($request->all(), [
        'invoice_title' => 'required',
        'invoice_seller' => 'nullable',
        'invoice_national_id' => 'nullable',
        'invoice_reg_number' => 'nullable',
        'invoice_economic_number' => 'nullable',
        'invoice_company_address' => 'nullable',
        'invoice_company_postal_code' => 'nullable',
        'invoice_company_fax_phone' => 'nullable',
        'invoice_description' => 'nullable',
        'stampImageId' => 'nullable',
      ], $messages);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json([
          'status' => false,
          'data' => [
            'errors' => $errors,
          ]
        ], 400);
      }

      if (!is_null($request->stampImageId)) {
        $media = Media::find($request->stampImageId);
        $stamp = Setting::where('name', 'invoice_stamp')->first();
        $stamp->media()->sync($media);
      }

      $fillable = [
        'invoice_title',
        'invoice_seller',
        'invoice_national_id',
        'invoice_reg_number',
        'invoice_economic_number',
        'invoice_company_address',
        'invoice_company_postal_code',
        'invoice_company_fax_phone',
        'invoice_description'
      ];

      foreach ($request->all() as $key => $item)
      {
        if (in_array($key, $fillable))
          Setting::where('name', $key)->update([
            "value" => $item,
          ]);
      }

    }

    public function UploadImage(Request $request)
    {
      $imageExtension = $request->image->extension();

      $input['image'] = time() . '.' . $imageExtension;
      $request->image->move(public_path('media/settings'), $input['image']);

      $media = Media::create([
        'name' => $input['image'],
        'path' => 'media/settings',
        'person_id' => auth()->guard('staff')->user()->id,
        'person_role' => 'staff' ,
      ]);

      $settings = Setting::select('name', 'value')->get();
      $site_url = $settings->where('name', 'site_url')->first()->value;

      return response()->json([
        'status' => true,
        'data' => [
          'id' => "$media->id",
          'url' => "$site_url/$media->path/$media->name",
          'tempFile' => true,
          'slot' => null,
        ]
      ]);
    }

    public function deleteStampImage()
    {
      $invoice_stamp = Setting::where('name', 'invoice_stamp')->first();
      $invoice_stamp->media()->detach();
    }

}
