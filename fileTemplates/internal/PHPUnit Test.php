<?php
#if (${NAMESPACE})

#parse("PHP File Header.php")

namespace ${NAMESPACE};

#end

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ${NAME} extends TestCase 
{

}
