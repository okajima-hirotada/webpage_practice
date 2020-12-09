<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){ 
        // 検索条件
        $word = $request->input('name');
        $s_tanto = $request->input('tanto');
        $s_gyosyu = $request->input('gyosyu');
        // セレクトタブ用
        $tanto = DB::table('enshia_kintone.employees')->pluck('employee_name','employee_id');
        $gyosyu = DB::table('enshia_kintone.gyousyus')->pluck('gyousyu_name','gyousyu_id');
        // 検索結果
        if($s_tanto == '' & $s_gyosyu == '') {
            $items = DB::table('v_kokyaku_search')->where('join_kokyaku_name', 'LIKE', "%{$word}%")->paginate(50);
        }elseif($s_tanto == ''){
            $items = DB::table('v_kokyaku_search')->where('join_kokyaku_name', 'LIKE', "%{$word}%")->where('gyousyu_id', $s_gyosyu)->paginate(50);
        }elseif($s_gyosyu == ''){
            $items = DB::table('v_kokyaku_search')->where('join_kokyaku_name', 'LIKE', "%{$word}%")->where('employee_id', $s_tanto)->paginate(50);
        }else{
            $items = DB::table('v_kokyaku_search')->where('join_kokyaku_name', 'LIKE', "%{$word}%")->where('employee_id', $s_tanto)->where('gyousyu_id', $s_gyosyu)->paginate(50);
        }

        return view('index', ['items' => $items, 'tanto' => $tanto, 'gyosyu' => $gyosyu, 'word' => $word, 's_tanto' => $s_tanto, 's_gyosyu' => $s_gyosyu]);
    }
}
