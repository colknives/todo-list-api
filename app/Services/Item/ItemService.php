<?php

namespace App\Services\Item;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\Repositories\ItemRepository;
use App\Services\AbstractBaseService;

class ItemService extends AbstractBaseService implements ItemInterface {

    /**
     * Module Name
     */
    protected $module = 'item';

    /**
     * Item Repository Instance
     */
    protected $itemRepository;
    
    /**
     * ItemService constructor.
     *
     * @param Request $request
     * @param ItemRepository $itemRepository
     *
     * @return void
     */
    public function __construct(
        Request $request,
        ItemRepository $itemRepository) {

        $this->request = $request;
        $this->itemRepository = $itemRepository;

        parent::__construct($request);
    }

    /**
     * Create Item Service Method
     *
     * @return response
     */
    public function createItem() 
    {
        return (new CreateItem($this->request, $this->itemRepository))->handle()->response();
    }    
}