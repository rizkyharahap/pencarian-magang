<?php namespace App\Models;
/**
* THIS CONTROLER CODEIGNITER 4
* Codeigniter Version 4.x
* Generated by LigatCode
**/
use CodeIgniter\Model;

class LamaranModel extends Model
{
    protected $table      = 'lamaran';
    protected $primaryKey = 'id';
    //To help protect against Mass Assignment Attacks, the Model class requires
    //that you list all of the field names that can be changed during inserts and updates
    // https://codeigniter4.github.io/userguide/models/model.html#protecting-fields
    protected $allowedFields = ['id','id_kandidat','id_iklan','nama','email','berkas'];

}

/* End of file LamaranModel.php */
/* Location: ./app/models/LamaranModel.php */
/* Please DO NOT modify this information : */
/* Generated by Ligatcode Codeigniter 4 CRUD Generator 2020-12-08 23:03:20 */