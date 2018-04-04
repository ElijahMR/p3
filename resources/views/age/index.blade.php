@extends('layouts.master')

@section('title')
    Age Calculator
@endsection

@section('content')
    <h1 class='display-1'>Age Calculator</h1>
    <p>This page will calculate your age in various time scales from seconds to years. The output is rounded down to the nearest whole number so it looks nicer but will show the complete age (in weeks down to seconds) when the "all" option is selected.</p>
    <form method='GET' action='/result/'>
        {{ csrf_field() }}
        <div class='form-group col-md-6 offset-md-3'>
            <label for="day">Your Date of Birth:</label>
            <input type='date'
                   class='form-control'
                   id='day'
                   name='day'
                   min='1901-12-14'
                   max='{{ $today }}'
                   value='{{ $day or $today}}'
                   required>
            <small id="dateHelp"
                   class="form-text text-muted">Dates are limited to between 1901-12-14 and {{ $today }}. Enter a date in the format YYYY-MM-DD if you're using an older browser.
            </small>
        </div>
        <div class='form-group'>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio1' value='secs' {{ isset($timeScale) ? ($timeScale == 'secs' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio1">
                    Seconds
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="timeScale" id='radio2' value='mins' {{ isset($timeScale) ? ($timeScale == 'mins' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio2">
                    Minutes
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio3' value='hours' {{ isset($timeScale) ? ($timeScale == 'hours' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio3">
                    Hours
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio4' value='days' {{ isset($timeScale) ? ($timeScale == 'days' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio4">
                    Days
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio5' value='weeks' {{ isset($timeScale) ? ($timeScale == 'weeks' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio5">
                    Weeks
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio6' value='months' {{ isset($timeScale) ? ($timeScale == 'months' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio6">
                    Months
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio7' value='years' {{ isset($timeScale) ? ($timeScale == 'years' ? 'checked' : '') : '' }}>
                <label class="form-check-label" for="radio7">
                    Years
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio8' value='all' {{ isset($timeScale) ? ($timeScale == 'all' ? 'checked' : '') : 'checked' }}>
                <label class="form-check-label" for="radio8">
                    Combined
                </label>
            </div>
        </div>
        <div class='form-group'>
            <div class="form-check">
                <input class="form-check-input"
                       type="checkbox"
                       value="1"
                       id="check1"
                       name='leapYears' {{ isset($leapYears) ? ($leapYears == 'no' ? '' : 'checked') : '' }}>
                <label class="form-check-label" for="check1">
                    Calculate number of leap years passed.
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    @include('modules.error-form')

    @if(isset($age))
        <h1 class="display-4">{{ $age }}</h1>
    @endif
    @if(isset($leapYears))
        @if($leapYears != 'no')
            <h1>{{ $leapYears }}</h1>
        @endif
    @endif
@endsection