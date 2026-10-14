@extends('layouts.app')
@section('title', 'Dashboard')

@section('header')
<div class="tw-flex tw-justify-between tw-items-center tw-mb-6">
    <div class="tw-flex tw-items-center tw-space-x-4">
        <div
            class="tw-p-3 tw-bg-white tw-border tw-border-gray-200 tw-text-indigo-600 tw-rounded-xl tw-shadow-sm tw-flex tw-items-center tw-justify-center">
            <i class="fas fa-th tw-text-xl"></i>
        </div>
        <div>
            <h2 class="tw-text-2xl tw-font-bold tw-text-gray-100 tw-tracking-wide">Dashboard</h2>
            <p class="tw-text-sm tw-text-gray-400">စနစ်အတွင်းသို့ ပြန်လည်ကြိုဆိုပါတယ်။</p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="tw-py-6">
    <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
        <x-card>
            <div class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-py-12 tw-space-y-3">
                <div class="tw-p-4 tw-bg-indigo-50 tw-text-indigo-600 tw-rounded-full tw-mb-2">
                    <i class="fas fa-chart-pie tw-text-3xl"></i>
                </div>
                <h3 class="tw-text-xl tw-font-bold tw-text-gray-900">Welcome to the Dashboard</h3>
                <p class="tw-text-sm tw-text-gray-600 tw-text-center tw-max-w-sm">
                    သင်၏ စီမံခန့်ခွဲမှုလုပ်ငန်းများကို ဤနေရာတွင် အဆင်ပြေချောမွေ့စွာ ဆောင်ရွက်နိုင်ပါသည်။
                </p>
            </div>
        </x-card>
    </div>
</div>
@endsection
