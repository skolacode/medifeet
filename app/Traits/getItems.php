<?php

namespace App\Traits;


use App\Item;
use Config;

trait getItems
{

	/* Get all items */
	public function allItems()
	{

		$items = Item::all();

		return $items;
	}

	/* Get item */
	public function getItems()
	{

		$items = $this->getItems(Config::get('constants.ITEM'));

		return $items;
	}

	/*Get items base on request  */
	public function getItem($item_id)
	{

		$items = Item::where('id', $item_id)->get();

		return $items;
	}

	/* Search item function */

	/* Update Stock after customer buy */
	public function updateStock($request)
	{

		$item = Item::find($request->size);

		/* Calculation for latets stock */
		$current_stock = $item->stock;
		$selled_stock = $request->quantity;
		$actual_stock = $current_stock - $selled_stock;

		/* The final stock */
		$item->stock = $actual_stock;
		$item->save();
	}
	
}
