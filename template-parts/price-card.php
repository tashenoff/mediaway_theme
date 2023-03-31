
<div class="pt-10 w-full">
			<h1 class="text-[26px] font-bold uppercase">Выберите свой тариф</h1>
		</div>


		<div class="grid grid-cols-3 gap-4 py-10">






<?php
$card = array(
    "1" => ['name' => 'start', 'desc' => 'lorem', 'price' => 500],
    "2" => ['name' => 'pro', 'desc' => 'lorem', 'price' => 1500],
    "3" => ['name' => 'ultima', 'desc' => 'lorem', 'price' => 5020],
   
);


foreach ($card as $key => $array) {?>

<div class="p-5 bg-white dark:bg-slate-800 dark:text-slate-400 rounded-sm group hover:shadow-lg duration-400">

<div class="py-5  flex w-full items-center justify-between border-b border-black dark:border-white dark:border-opacity-10 border-opacity-10">

<div class=" font-bold"><? echo($array['name']);?></div>
<p class="font-bold bg-red-500 p-2 text-white text-sm px-5 rounded-full"><? echo ($array['price']);?></p>

</div>

<ul class="pt-5">
    <? foreach ($array as $value) {?>
      <li class="flex py-5">
        
      <div class="div">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                </svg>
            </div>
      
      <span>  <? echo ($array['desc']);?>
      </span>
    </li>

        
    <?}?>
    </ul>

    <button
        class="font-bold text-black rounded-sm  group-hover:text-white dark:text-white py-3 px-5 border border-black dark:border-white dark:border-opacity-20 border-opacity-20 group-hover:bg-red-500 w-full mt-10">Заказать</button>
    </div>
<?}?>





</div>
