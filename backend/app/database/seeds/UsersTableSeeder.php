<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class UsersTableSeeder extends Seeder {

    public function run() {
        
        User::create([
            "id"               =>  4,
            "rol_id"           =>  2,
            "rhdata_id"        =>  null,
            "loandata_id"      =>  null,
            "businessunit_id"  =>  1,
            "id_rh"            =>  "2258",
            "id_vta"           =>  "2258",
            "id_rfc"           =>  "",
            "last_name"        =>  "demo",
            "name"             =>  "demo demo",
            "email"            =>  "vizcainojimenez@gmail.com",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "demo",
            "pass"             =>  "demo",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('demo'),
            "remember_token"   =>  null

        ]);

        User::create([
            "id"               =>  6,
            "rol_id"           =>  2,
            "rhdata_id"        =>  NULL,
            "loandata_id"      =>  NULL,
            "businessunit_id"  =>  8,
            "id_rh"            =>  "10",
            "id_vta"           =>  "0",
            "id_rfc"           =>  "",
            "last_name"        =>  "ESQUEDA NAVARRO",
            "name"             =>  "KARINA MARGARITA",
            "email"            =>  "contabilidad.karina@logoline.com.mx",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "KARINA.ESQUEDA",
            "pass"             =>  "201510",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('201510'),
            "remember_token"   =>  NULL,
            "created_at"       =>  "2015-09-02 21:38:14",
            "updated_at"       =>  "2015-09-02 21:38:14",
            "deleted_at"       =>  NULL
        ]);

        User::create([
            "id"               =>  7,
            "rol_id"           =>  4,
            "rhdata_id"        =>  NULL,
            "loandata_id"      =>  NULL,
            "businessunit_id"  =>  6,
            "id_rh"            =>  "285",
            "id_vta"           =>  "0",
            "id_rfc"           =>  "",
            "last_name"        =>  "RODRIGUEZ RODRIGUEZ",
            "name"             =>  "ARIADNA MARGARITA ",
            "email"            =>  "",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "Ariadna.rodriguez",
            "pass"             =>  "2015285",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('2015285'),
            "remember_token"   =>  NULL,
            "created_at"       =>  "2015-09-02 21:38:41",
            "updated_at"       =>  "2015-09-02 21:38:41",
            "deleted_at"       =>  NULL
        ]);

        User::create([
            "id"               =>  8,
            "rol_id"           =>  4,
            "rhdata_id"        =>  NULL,
            "loandata_id"      =>  NULL,
            "businessunit_id"  =>  8,
            "id_rh"            =>  "31",
            "id_vta"           =>  "0",
            "id_rfc"           =>  "",
            "last_name"        =>  "Padilla Aguirre",
            "name"             =>  "Cinthya Maria",
            "email"            =>  "rh@logoline.com.mx",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "Cinthya.Padilla",
            "pass"             =>  "201531",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('201531'),
            "remember_token"   =>  NULL,
            "created_at"       =>  "2015-09-02 21:42:05",
            "updated_at"       =>  "2015-09-02 21:42:05",
            "deleted_at"       =>  NULL
        ]);

        User::create([
            "id"               =>  9,
            "rol_id"           =>  1,     
            "rhdata_id"        =>  NULL,
            "loandata_id"      =>  NULL,
            "businessunit_id"  =>  2,
            "id_rh"            =>  "166",
            "id_vta"           =>  "6",
            "id_rfc"           =>  "",
            "last_name"        =>  "TAGLE GOMEZ",
            "name"             =>  "MARIA DEL PILAR",
            "email"            =>  "pilar.tagle@adventa.mx",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "PILAR.TAGLE",
            "pass"             =>  "2015166",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('2015166'),
            "remember_token"   =>  NULL,
            "created_at"       =>  "2015-09-02 21:42:17",
            "updated_at"       =>  "2015-09-02 21:42:17",
            "deleted_at"       =>  NULL
        ]);

        User::create([
            "id"               =>  10,
            "rol_id"           =>  3,
            "rhdata_id"        =>  NULL,
            "loandata_id"      =>  NULL,
            "businessunit_id"  =>  8,
            "id_rh"            =>  "12",
            "id_vta"           =>  "0",
            "id_rfc"           =>  "",
            "last_name"        =>  "ANGUIANO SAAVEDRA",
            "name"             =>  "MARIO JAIME",
            "email"            =>  "jaime@logoline.com.mx",
            "sucursal"         =>  "",
            "puesto"           =>  "",
            "photo"            =>  "img/samples/2.jpg",
            "login"            =>  "j.anguiano",
            "pass"             =>  "audi_q5",
            "active"           =>  1,
            "encryptpass"      =>  Hash::make('audi_q5'),
            "remember_token"   =>  NULL,
            "created_at"       =>  "2015-09-02 21:43:10",
            "updated_at"       =>  "2015-09-02 21:59:10",
            "deleted_at"       =>  NULL,
        ]);
    }
}
