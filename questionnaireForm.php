<?php

    class questionnaireForm {

        protected $csv = 'questionnaireForm.csv';

        public function insertCsv(){
            //配列に入力されたデータを格納
            $checkboxData = [];
            $checkboxData[] = $_POST["q1"];
            $checkboxData[] = $_POST["q2"];
            $checkboxData[] = $_POST["q3"];
            //CSVファイルへの書き込み処理
            $file = fopen($this->csv, 'ab');
            flock($file, LOCK_EX);
            fwrite($file, implode(",", $checkboxData)."\n");
            flock($file, LOCK_UN);
            fclose($file);
        }

        public function searchCsv(){

            //空の配列を用意
            $q1 = [];
            $q2 = [];
            $q3 = [];

            //ファイルからCSVデータを読み込み
            $file = fopen($this->csv, 'rb');
            //CSVファイルを一列づつ読み込む
            while($line = fgetcsv($file, 1024, ',')){
                array_push($q1,$line[0]);
                array_push($q2,$line[1]);
                array_push($q3,$line[2]);

            }

            //配列に回答数を格納
            $array = [];
            //Q1のABCそれぞれの回答数
            array_push($array, count(array_filter($q1,function ($var){
                return ($var == "A");
            })));
            array_push($array, count(array_filter($q1,function ($var){
                return ($var == "B");
            })));
            array_push($array, count(array_filter($q1,function ($var){
                return ($var == "C");
            })));

            //Q2のABCそれぞれの回答数
            array_push($array, count(array_filter($q2,function ($var){
                return ($var == "A");
            })));
            array_push($array, count(array_filter($q2,function ($var){
                return ($var == "B");
            })));
            array_push($array, count(array_filter($q2,function ($var){
                return ($var == "C");
            })));

            //Q3のABCそれぞれの回答数
            array_push($array, count(array_filter($q3,function ($var){
                return ($var == "A");
            })));
            array_push($array, count(array_filter($q3,function ($var){
                return ($var == "B");
            })));
            array_push($array, count(array_filter($q3,function ($var){
                return ($var == "C");
            })));
            // print_r($array);
            return $array;
        }

    }