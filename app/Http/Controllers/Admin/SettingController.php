<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{

    public function index()
    {
        return view('backend.setting.index');
    }

    public function generalSettings()
    {
        $siteName = Setting::where('key', 'site_name')->value('value');
        $siteEmail = Setting::where('key', 'site_email')->value('value');
        $siteLogo = Setting::where('key', 'site_logo')->value('value');
        $siteFavicon = Setting::where('key', 'site_favicon')->value('value');
        $appDebug = Setting::where('key', 'app_debug')->value('value');
        $appEnviroment = Setting::where('key', 'app_enviroment')->value('value');

        $smtpHost = Setting::where('key', 'smtp_host')->value('value');
        $smtpPort = Setting::where('key', 'smtp_port')->value('value');
        $smtpEmail = Setting::where('key', 'smtp_email')->value('value');
        $smtpPassword = Setting::where('key', 'smtp_password')->value('value');
        return view('backend.setting.general-setting',compact(
        'siteName',
        'siteEmail',
        'siteLogo',
        'siteFavicon',
        'appDebug',
        'appDebug',
        'appEnviroment',
        'smtpHost',
        'smtpPort',
        'smtpEmail',
        'smtpPassword'
        ));
    }

    public function PrivacyPolicy()
    {
        $privacyPolicy = Setting::where('key', 'privacy_policy')->value('value');
        return view('backend.setting.privacy-policy',compact('privacyPolicy'));
    }

    public function TermsAndConditions()
    {
        $termsAndConditions = Setting::where('key', 'terms_and_conditions')->value('value');
        return view('backend.setting.terms-and-condition',compact('termsAndConditions'));
    }

    public function storeSiteSettings(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email',
            'site_logo' => 'nullable|image|mimes:jpg,jpeg,png',
            'site_favicon' => 'nullable|image|mimes:jpg,jpeg,png',
            'app_enviroment' => 'required|string',
            'app_debug' => 'required|string',
        ]);

        // Store settings in the database
        $this->saveSetting('site_name', $request->site_name);
        $this->saveSetting('site_email', $request->site_email);
        $this->saveSetting('app_enviroment', $request->app_enviroment);
        $this->saveSetting('app_debug', $request->app_debug);

        if($request->hasFile('site_logo')){
            $file =  $request->file('site_logo');
            $ext = $file->getClientOriginalExtension();
            $siteLogo = time().'.'.$ext;
            $uploadPath = 'assets/backend/uploads/site_logo';
            $file->move($uploadPath,$siteLogo);
            $this->saveSetting('site_logo', $siteLogo);
        }

        if($request->hasFile('site_favicon')){
            $file =  $request->file('site_favicon');
            $ext = $file->getClientOriginalExtension();
            $siteFavicon = time().'.'.$ext;
            $uploadPath = 'assets/backend/uploads/site_favicon';
            $file->move($uploadPath,$siteFavicon);
            $this->saveSetting('site_favicon', $siteFavicon);
        }
        toast('Site settings updated successfully.','success');

        return back();
    }

    // Store SMTP Settings
    public function storeSmtpSettings(Request $request)
    {
        $request->validate([
            'smtp_host' => 'required|string|max:255',
            'smtp_port' => 'required|numeric',
            'smtp_email' => 'required|email',
            'smtp_password' => 'required|string|max:255',
        ]);

        // Store settings in the database
        $this->saveSetting('smtp_host', $request->smtp_host);
        $this->saveSetting('smtp_port', $request->smtp_port);
        $this->saveSetting('smtp_email', $request->smtp_email);
        $this->saveSetting('smtp_password', $request->smtp_password);

        toast('SMTP settings updated successfully.','success');

        return back();
    }

    // Helper function to save or update settings
    protected function saveSetting($key, $value)
    {
        Setting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }



    public function storePrivacyPolicy(Request $request)
    {
        $request->validate([
            'privacy_policy' => 'required|string',
        ]);

        // Save Privacy Policy in the settings table
        $this->saveSetting('privacy_policy', $request->privacy_policy);
        toast('Privacy Policy updated successfully.','success');

        return back();
    }


    public function storeTermsAndConditions(Request $request)
    {
        $request->validate([
            'terms_and_conditions' => 'required|string',
        ]);

        // Save Terms and Conditions in the settings table
        $this->saveSetting('terms_and_conditions', $request->terms_and_conditions);

        toast('Terms and Conditions updated successfully.','success');

        return back();
    }

    
}
