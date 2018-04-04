<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index() {
        $today = date('Y-m-d');
        return view('age.index')->with([
        'today' => $today
        ]);
    }

    private function calculateAge($timeScale, $day) {
        $now = time();
        $selectedYear = substr($day, 0, 4);
        $selectedMonth = substr($day, 5, 2);
        $currentYear = date('Y');
        $currentMonth = date('m');
        $result = $now - strtotime($day);
        if ($timeScale == 'secs') {
            return 'You are approximately ' . $result . ' seconds old.';
        } else if ($timeScale == 'mins') {
            $result = bcdiv($result, 60, 0);

            return 'You are approximately ' . $result . ' minutes old.';
        } else if ($timeScale == 'hours') {
            $result = bcdiv($result, 3600, 0);

            return 'You are approximately ' . $result . ' hours old.';
        } else if ($timeScale == 'days') {
            $result = bcdiv($result, 86400, 0);

            return 'You are approximately ' . $result . ' days old.';
        } else if ($timeScale == 'weeks') {
            $result = bcdiv($result, 604800, 0);

            return 'You are approximately ' . $result . ' weeks old.';
        } else if ($timeScale == 'months') {
            $result = (($currentYear - $selectedYear) * 12) + ($currentMonth - $selectedMonth);

            return 'You are approximately ' . $result . ' months old.';
        } else if ($timeScale == 'years') {
            $months = (($currentYear - $selectedYear) * 12) + ($currentMonth - $selectedMonth);
            $result = bcdiv($months, 12, 0);

            return 'You are approximately ' . $result . ' years old.';
        } else {
            $weeks = bcdiv($result, 604800, 0);
            $days = bcdiv(bcmod($result, 604800), 86400, 0);
            $hours = bcdiv(bcmod(bcmod($result, 604800), 86400), 3600, 0);
            $mins = bcdiv(bcmod(bcmod(bcmod($result, 604800), 86400), 3600), 60, 0);
            $secs = bcmod(bcmod(bcmod(bcmod($result, 604800), 86400), 3600), 60);

            return 'You are approximately ' . $weeks . ' weeks ' . $days . ' days ' . $hours . ' hours ' . $mins . ' minutes and ' . $secs . ' seconds old.';
        }
    }

    private function leapYearCalculator($day) {
        $day = substr($day, 0, 4);
        $currentYear = date('Y');
        $numberOfLeapYears = 0;

        for ($i = intval($day); $i < $currentYear; $i++) {
            if ($i % 4 != 0) {
                continue;
            } else if ($i % 100 != 0) {
                $numberOfLeapYears++;
                continue;
            } else if ($i % 400 != 0) {
                continue;
            } else {
                $numberOfLeapYears++;
                continue;
            }
        }

        return 'There have been ' . $numberOfLeapYears . ' leap years since your birth year.';
    }

    public function result(Request $request) {
        $this->validate($request, [
            'day' => 'required|after_or_equal:1901-12-14|before_or_equal:' . date('Y-m-d'),
            'timeScale' => 'required|alpha_num',
            'leapYears' => 'sometimes|required|boolean'
        ]);

        $today = date('Y-m-d');
        $age = $this->calculateAge($request->input('timeScale'), $request->input('day'));
        $leapYears = 'no';
        if ($request->has('leapYears')) {
            $leapYears = $this->leapYearCalculator($request->input('day'));
        }

        return view('age.index')->with([
            'age' => $age,
            'leapYears' => $leapYears,
            'today' => $today,
            'day' => $request->input('day'),
            'timeScale' => $request->input('timeScale')
        ]);
    }
}
