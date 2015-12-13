<?php

namespace SIts\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SItsUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
