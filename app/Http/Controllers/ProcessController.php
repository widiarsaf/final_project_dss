<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Location;
use App\Models\Alternative;
use DB;

class ProcessController extends Controller
{

    public function index(Request $request){
        
        $weight = $request->get('weight');
        $location_selected = $request->get('option');
        $selected_alternative = Alternative::whereIn('id_location', $location_selected)->get();
        $count = count($location_selected);
        $value_location = array();
        for ($i = 1; $i <= count($location_selected); $i++){
            $value_location[$location_selected[$i]]['value'] = $count;
            $count--; 
        }

        // dd($value_location);

        $determine_matrix = array();
        // get determine matrix
        foreach($selected_alternative as $alternative){
            // echo $value_location[$alternative->id_location]['value'];

            $determine_matrix[$alternative->id]['id'] = $alternative->id;
            // $determine_matrix[$alternative->id]['univeristy'] = $alternative->university;
            $determine_matrix[$alternative->id]['national_rank'] = $alternative->national_rank;
            $determine_matrix[$alternative->id]['quality_educations'] = $alternative->quality_educations;
            $determine_matrix[$alternative->id]['alumni_employment'] = $alternative->alumni_employment;
            $determine_matrix[$alternative->id]['quality_faculty'] = $alternative->quality_faculty;
            $determine_matrix[$alternative->id]['research_performance'] = $alternative->research_performance;
            $determine_matrix[$alternative->id]['location'] = $value_location[$alternative->id_location]['value'];
        }

        // dd($determine_matrix);



        // Normalized 
        $normalized_matrix = array();
        $criteria = DB::table('criteria')->get();
        $total_criteria = count($criteria);
        

        for ($a = 1; $a <= $total_criteria; $a++ ){
            for ($b = 0; $b < count($determine_matrix); $b++){
                $value = pow($determine_matrix[$selected_alternative[$b]->id][$criteria[$a-1]->criteria_name], 2);
                // echo $value . '<br>' ;
                // echo $selected_alternative[$b]->university . ' ';
                // echo $criteria[$a-1]->criteria_name . '<br>' ;
                $normalized_matrix[$selected_alternative[$b]->id][$criteria[$a-1]->criteria_name] = $value;
            }

            $sum_value = array_sum(array_column($normalized_matrix, $criteria[$a-1]->criteria_name));
            $sqrt_value = sqrt($sum_value);

            for ($i = 0; $i < count($determine_matrix); $i++){
                 $normalized_matrix[$selected_alternative[$i]->id][$criteria[$a-1]->criteria_name] = $determine_matrix[$selected_alternative[$i]->id][$criteria[$a-1]->criteria_name] / $sqrt_value; 
            }

        }



        // Weighted Normalized
        $weighted_normalized = array();
        for ($a = 1; $a <= count($criteria); $a++){
            for ($b = 0; $b < count($determine_matrix); $b++){
                $weighted_value = $normalized_matrix[$selected_alternative[$b]->id][$criteria[$a-1]->criteria_name] * $weight[$criteria[$a-1]->criteria_name];
                $weighted_normalized[$selected_alternative[$b]->id][$criteria[$a-1]->criteria_name] = $weighted_value;
            }
        }

        //  dd($weighted_normalized);

        // Y min max
        $max_value = array();
        $min_value = array();

        for ($a = 0; $a < count($determine_matrix); $a++){
            $valueMax = 0;
            $valueMin = 0;

            for ($b = 1; $b <= count($criteria); $b++){
                if ($criteria[$b - 1]->attribute == 2){
                    $valueMax += $weighted_normalized[$selected_alternative[$a]->id][$criteria[$b-1]->criteria_name];
                }
                else if($criteria[$b - 1]->attribute == 1){
                    $valueMin += $weighted_normalized[$selected_alternative[$a]->id][$criteria[$b-1]->criteria_name];
                }

            }


           
            $max_value[$selected_alternative[$a]->id] = $valueMax;
            $min_value[$selected_alternative[$a]->id] = $valueMin;


        }

        $ranking = array();
        for ($a = 0; $a < count($determine_matrix); $a++){
            $yi_value = $max_value[$selected_alternative[$a]->id] - $min_value[$selected_alternative[$a]->id];
            $ranking[$selected_alternative[$a]->id] = $yi_value;
        }

        // dd($ranking);
        arsort($ranking, SORT_NUMERIC);
        // dd($ranking);
         
        foreach($ranking as $id => $value) {
            for ($a = 0; $a < count($determine_matrix); $a++){
            if ($selected_alternative[$a]->id == $id ){
                $name = DB::table('alternative')->where('id', $id)->value('university');
                echo "id=" . $id . ", Value=" . $value . " Name = " . $name;
                echo '<br>';
            }
        }
    }





        $location = DB::table('location')->get();
        return view('welcome', compact('location', 'criteria'));

        // Create Determine Matrix

        
    }


    public function reset(Request $request){
        $criteria = DB::table('weight_criteria')->where('weight', '!=', 0)->update(['weight' => 0]);
        $location_reset= DB::table('location')->where('value', '!=', 0)->update(['value' => 0]);
        $location = DB::table('location')->get();
        return view('welcome', compact('location'));
    }

    
}
