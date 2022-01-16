<?php

Class Form{
    var $fieldtext = array();
    var $fieldpassword = array();
    var $fieldradio = array();
    var $fieldcheckbox = array();
    var $fieldselect = array();
    var $fieldtextarea = array();

    var $action;
    var $submit = "";

    var $jumFieldtext=0;
    var $jumFieldpassword=0;
    var $jumFieldradio=0;
    var $jumFieldcheckbox=0;
    var $jumFieldselect=0;
    var $jumFieldtextarea=0;
    
    function __construct($action, $submit){
        $this->action = $action;
        $this->submit = $submit;
    }

    function addFieldtext($name,$label){
        $this->fieldtext[$this->jumFieldtext]['name']=$name;
        $this->fieldtext[$this->jumFieldtext]['label']=$label;
        $this->jumFieldtext++;
    }

    function addFieldpassword($name,$label){
        $this->fieldpassword[$this->jumFieldpassword]['name']=$name;
        $this->fieldpassword[$this->jumFieldpassword]['label']=$label;
        $this->jumFieldpassword++;
    }

    function addFieldradio($name,$label){
        $this->fieldradio[$this->jumFieldradio]['name']=$name;
        $this->fieldradio[$this->jumFieldradio]['label']=$label;
        $this->jumFieldradio++;
    }

    function addFieldcheckbox($name,$label){
        $this->fieldcheckbox[$this->jumFieldcheckbox]['name']=$name;
        $this->fieldcheckbox[$this->jumFieldcheckbox]['label']=$label;
        $this->jumFieldcheckbox++;
    }

    function addFieldselect($name,$label){
        $this->fieldselect[$this->jumFieldselect]['name']=$name;
        $this->fieldselect[$this->jumFieldselect]['label']=$label;
        $this->jumFieldselect++;
    }

    function addFieldtextarea($name,$label){
        $this->fieldtextarea[$this->jumFieldtextarea]['name']=$name;
        $this->fieldtextarea[$this->jumFieldtextarea]['label']=$label;
        $this->jumFieldtextarea++;
    }
    
    function displayForm(){
        $txt="<form action='".$this->action."' method='post'>";
        $txt.="<table widht='100%'>";

        for($i=0;$i<$this->jumFieldtext;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldtext[$i]['label']."</td>";
            $txt.="<td><input type='text' name='".$this->fieldtext[$i]['name']."'></td></tr>";
        }

        for($i=0;$i<$this->jumFieldpassword;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldpassword[$i]['label']."</td>";
            $txt.="<td><input type='password' name='".$this->fieldpassword[$i]['name']."'></td></tr>";
        }

        for($i=0;$i<$this->jumFieldradio;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldradio[$i]['label']."</td>";
            $txt.="<td><input type='radio' name='".$this->fieldradio[$i]['name']."' value='Perempuan'>Perempuan</td>";
            $txt.="<td><input type='radio' name='".$this->fieldradio[$i]['name']."' value='Laki-Laki'>Laki-Laki</td></tr>";
        }

        for($i=0;$i<$this->jumFieldcheckbox;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldcheckbox[$i]['label']."</td>";
            $txt.="<td><input type='checkbox' name='".$this->fieldcheckbox[$i]['name']."' value='AKTIF' id='AKTIF'>";
            $txt.="<label for='AKTIF'>Mahasiswa Aktif</label></td></tr>";
        }
        
        for($i=0;$i<$this->jumFieldselect;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldselect[$i]['label']."</td>";
            $txt.="<td><select name='".$this->fieldselect[$i]['name']."'>";
                $txt.="<option value=' '>----------Select----------</option>";
                $txt.="<option value='Teknik Informatika'>Teknik Informatika</option>";
                $txt.="<option value='Matematika'>Matematika</option>";
                $txt.="<option value='Teknik Sipil'>Teknik Sipil</option>";
                $txt.="<option value='Ekonomi'>Ekonomi</option>";
                $txt.="<option value='Kedokteran'>Kedokteran</option>";
                $txt.="</select></td></td></tr>";
        }

        for($i=0;$i<$this->jumFieldtextarea;$i++)
        {
            $txt.="<tr><td align='right'>".$this->fieldtextarea[$i]['label']."</td>";
            $txt.="<td><textarea name='".$this->fieldtextarea[$i]['name']."'></textarea></td></tr>";   
        }

        $txt.="<tr><td><input type='submit' name='tombol'value='".$this->submit."' ></td></tr>";
        $txt.="</table>";
        return $txt;
    }

    function getDataText(){
        for($i = 0; $i < $this->jumFieldtext; $i++)
        {
            $data[$i] = $_POST[$this->fieldtext[$i]['name']];
        }
        return $data;
    }

    function getDataPassword(){
        for($i = 0; $i < $this->jumFieldpassword; $i++)
        {
            $data[$i] = $_POST[$this->fieldpassword[$i]['name']];
        }
        return $data;
    }

    function getDataRadio(){
        for($i = 0; $i < $this->jumFieldradio; $i++)
        {
            $data[$i] = $_POST[$this->fieldradio[$i]['name']];
        }
        return $data;
    }


    function getDataCheckbox(){
        for($i = 0; $i < $this->jumFieldcheckbox; $i++)
        {
            $data[$i] = $_POST[$this->fieldcheckbox[$i]['name']];
        }
        return $data;
    }

    function getDataSelect(){
        for($i = 0; $i < $this->jumFieldselect; $i++)
        {
            $data[$i] = $_POST[$this->fieldselect[$i]['name']];
        }
        return $data;
    }

    function getDataTextarea(){
        for($i = 0; $i < $this->jumFieldtextarea; $i++)
        {
            $data[$i] = $_POST[$this->fieldtextarea[$i]['name']];
        }
        return $data;
    }
}
