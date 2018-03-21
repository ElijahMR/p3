@extends('layouts.master')

@section('title')
    Age Calculator
@endsection

@section('content')
    <h1 class='display-1'>Age Calculator</h1>
    <p>This page will calculate your age in various time scales from seconds to years. The output is rounded down to the nearest whole number so it looks nicer but will show the complete age when the "all" option is selected.</p>
    <form method='GET' action='index.php'>
        <div class='form-group col-md-6 offset-md-3'>
            <label for="day">Your Date of Birth:</label>
            <input type='date'
                   class='form-control'
                   id='day'
                   name='day'
                   min='1901-12-14'
                   max='2018-02-01'
                   value=''
                   required
                   pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
            <small id="dateHelp"
                   class="form-text text-muted">Dates are limited to between 1901/12/14 and today's date.
            </small>
        </div>
        <div class='form-group'>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio1' value='secs'>
                <label class="form-check-label" for="radio1">
                    Seconds
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="timeScale" id='radio2' value='mins'>
                <label class="form-check-label" for="radio2">
                    Minutes
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio3' value='hours'>
                <label class="form-check-label" for="radio3">
                    Hours
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio4' value='days'>
                <label class="form-check-label" for="radio4">
                    Days
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio5' value='weeks'>
                <label class="form-check-label" for="radio5">
                    Weeks
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio6' value='months'>
                <label class="form-check-label" for="radio6">
                    Months
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio7' value='years'>
                <label class="form-check-label" for="radio7">
                    Years
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name='timeScale' id='radio8' value='all' checked>
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
                       name='leapYears'
                <label class="form-check-label" for="check1">
                    Calculate number of leap years passed.
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
@endsection