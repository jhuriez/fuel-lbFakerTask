<?php

namespace Fuel\Tasks;

class Faker {

    public function run($groupName = 'default') {

        if (\Fuel\Core\Package::exists('lbfaker') === false) {
            \Cli::write("You need to get the package lbFaker !");
        } else {
            // Load config
            \Fuel\Core\Package::load('lbfaker');
            // Execute groupe default
            if (\Lb\Faker::faker($groupName))
                \Cli::write('All entities generated !');
            else
                \Cli::write('Error !');
        }
    }

}
