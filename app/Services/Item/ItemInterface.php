<?php

namespace App\Services\Item;

interface ItemInterface {

	public function createItem();

	public function markComplete($uuid);

	public function deleteItem($uuid);

	public function viewItem($uuid);
	
}
