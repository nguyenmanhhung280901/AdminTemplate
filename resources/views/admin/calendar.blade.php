@extends('layout')

@section('header')
    <div class="content">
        <ul>
            <li>
                <p class="clearfix mb-xs">
                    <span class="message pull-left">Generating Sales Report</span>
                    <span class="message pull-right text-dark">60%</span>
                </p>
                <div class="progress progress-xs light">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
            </li>

            <li>
                <p class="clearfix mb-xs">
                    <span class="message pull-left">Importing Contacts</span>
                    <span class="message pull-right text-dark">98%</span>
                </p>
                <div class="progress progress-xs light">
                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                </div>
            </li>

            <li>
                <p class="clearfix mb-xs">
                    <span class="message pull-left">Uploading something big</span>
                    <span class="message pull-right text-dark">33%</span>
                </p>
                <div class="progress progress-xs light mb-xs">
                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                </div>
            </li>
        </ul>
    </div>
@endsection
