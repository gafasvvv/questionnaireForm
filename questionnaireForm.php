<?php

    class questionnaireForm {

        protected $csv = 'questionnaireForm.csv';

        public function insertCsv(){
            $checkboxData = [];
            $checkboxData[] = $_POST["q1"];
            $checkboxData[] = $_POST["q2"];
            $checkboxData[] = $_POST["q3"];
            $file = fopen($this->csv, 'ab');
            flock($file, LOCK_EX);
            fwrite($file, implode(",", $checkboxData)."\n");
            flock($file, LOCK_UN);
            fclose($file);
        }

        public function searchCsv(){
            
        }

        public function listCsv(){
            
        }

    }