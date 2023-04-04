<?php
use App\Models\Menu;
use App\Models\SystemSetting;
use App\Models\CompanyProfile;
use App\Models\EmailConfig;
use App\Models\Aboutus;

function menus(){
    return Menu::where('status', 1)->get();
}

function companyProfile()
{
    return CompanyProfile::first();
}

function aboutUs()
{
    return Aboutus::first();
}

function emailConfig(){
    return EmailConfig::first();
}

function systemSetting(){
    return SystemSetting::first();
}
