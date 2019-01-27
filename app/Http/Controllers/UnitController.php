<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitController extends Controller
{
	public function index() {
		$units = Unit::where('status', 'visible')->orderBy('name', 'asc')->get();
		return view('unit.index', ['units' => $units]);
	}

  public function showUnit($name) {
		$unit = Unit::where('shortname', $name)->firstOrFail();
		return view('unit.show', ['unit' => $unit]);
  }
}
