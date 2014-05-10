<?php

class TreeGroupTop extends Seeder {

    public function run()
    {
        DB::table('tree_group_top')->delete();



        Sentry::getUserProvider()->create(array(
            'id'    => '1',
            'name' => '[NULL]'
        ));

        Sentry::getUserProvider()->create(array(
            'id'    => '10',
            'name' => 'Úvodní strana'
        ));

        Sentry::getUserProvider()->create(array(
            'id'    => '20',
            'name' => 'Zboží'
        ));

        Sentry::getUserProvider()->create(array(
            'id'    => '30',
            'name' => 'Texty'
        ));

        Sentry::getUserProvider()->create(array(
            'id'    => '80',
            'name' => 'Různé'
        ));

        Sentry::getUserProvider()->create(array(
            'id'    => '90',
            'name' => 'Nákupní košík'
        ));

    }
}
