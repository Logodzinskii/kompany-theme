<?php

namespace App\Http\StatClass;
class Kitchen
{
    public int $priceBox;
    public int $priceFacade;
    public int $heightKitchenTotal;
    public int $heightKitchenBoxDown;
    public int $kitchenDepth;
    public int $kitchenPriceAprons;
    public int $kitchenLengthTypeA;
    public int $kitchenLengthTypeB;
    public int $kitchenLengthTypeC;
    public int $pencilCaseForTheKitchenFridgeLength;
    public int $pencilCaseForTheKitchenMicrowaveLength;
    public int $pencilCaseForTheKitchenShelvesLength;
    public float $pricePencilCaseForTheKitchenFridge;
    public float $pricePencilCaseForTheKitchenMicrowave;
    public float $pricePencilCaseForTheKitchenShelves;
    public int $kitchenBoxTopLength;
    public int $kitchenBoxMiddleLength;
    public int $kitchenBoxWashingLength;
    public int $kitchenBoxDishwasherLength;
    public int $kitchenBoxShelvesLength;
    public int $kitchenBottleMakerLength;
    public int $FalseFacadeHiLength;
    public int $FalseFacade1LowLength;
    protected int $kitchenTotalLength;
    protected int $kitchenTotalHeight;
    protected int $kitchenBoxTopHeight;
    protected int $kitchenBoxMiddleHeight;

    public function __construct($arr)
    {
        $this->priceBox = $arr['priceBox'];
        $this->priceFacade = $arr['priceFacade'];
        $this->heightKitchenTotal= $arr['heightKitchenTotal'];
        $this->heightKitchenBoxDown = $arr['heightKitchenBoxDown'];
        $this->kitchenDepth = $arr['kitchenDepth'];
        $this->kitchenPriceAprons = $arr['kitchenPriceAprons'];
        $this->kitchenLengthTypeA = $arr['kitchenLengthTypeA'];
        $this->kitchenLengthTypeB = $arr['kitchenLengthTypeB'];
        $this->kitchenLengthTypeC = $arr['kitchenLengthTypeC'];
        $this->pencilCaseForTheKitchenFridgeLength = $arr['pencilCaseForTheKitchenFridgeLength'];
        $this->pencilCaseForTheKitchenMicrowaveLength = $arr['pencilCaseForTheKitchenMicrowaveLength'];
        $this->pencilCaseForTheKitchenShelvesLength= $arr['pencilCaseForTheKitchenShelvesLength'];
        $this->pricePencilCaseForTheKitchenFridge= $arr['pricePencilCaseForTheKitchenFridge'];
        $this->pricePencilCaseForTheKitchenMicrowave= $arr['pricePencilCaseForTheKitchenMicrowave'];
        $this->pricePencilCaseForTheKitchenShelves= $arr['pricePencilCaseForTheKitchenShelves'];
        $this->kitchenBoxTopLength= $arr['kitchenBoxTopLength'];
        $this->kitchenBoxMiddleLength= $arr['kitchenBoxMiddleLength'];
        $this->kitchenBoxWashingLength= $arr['kitchenBoxWashingLength'];
        $this->kitchenBoxDishwasherLength= $arr['kitchenBoxDishwasherLength'];
        $this->kitchenBoxShelvesLength= $arr['kitchenBoxShelvesLength'];
        $this->kitchenBottleMakerLength= $arr['kitchenBottleMakerLength'];
        $this->FalseFacadeHiLength= $arr['FalseFacadeHiLength'];
        $this->FalseFacade1LowLength= $arr['FalseFacade1LowLength'];
    }

    /**
     * Произведем расчеты постоянных значений и установим их
     */
    public function initializeKitchen()
    {
        $this->kitchenTotalLength = $this->kitchenLengthTypeB + $this->kitchenBoxWashingLength + $this->kitchenBoxDishwasherLength + $this->kitchenBoxShelvesLength + $this->kitchenBottleMakerLength;
        $this->kitchenTotalHeight = $this->heightKitchenTotal + 550;
        $this->kitchenBoxTopHeight = '600';
        $this->kitchenBoxMiddleHeight = $this->heightKitchenTotal - $this->heightKitchenBoxDown;
    }

    /**
     * @return int
     */
    public function getKitchenTotalLength(): int
    {
        return $this->kitchenTotalHeight;
    }

    /**
     * Расчитаем стоимость Фартука для кухни
     * @param int $lengthAprons
     * @return int
     */
    public function getCostAprons( int $lengthAprons):int
    {

        $kitchenTotalLength = $this->kitchenTotalLength;

        if($kitchenTotalLength < $lengthAprons)
        {
            $kitchenTotalLength = $lengthAprons ;
        }

        $count = intdiv($kitchenTotalLength, $lengthAprons);

        return $count * $this->kitchenPriceAprons;
    }

    /**
     * Вычислим стоимость от размеров высота и длинна
     * @param $price float
     * @param $length int
     * @param $height int
     * @return float
     */
    public function getCostPLH(float $price, int $length, int $height):float
    {
        return ($price) * ($length/1000) * ($height/1000);
    }
    /**
     * Вычислим стоимость от размеров высота и длинна
     * @param $price float
     * @param $length int
     * @param $height int
     * @param $priceOptions float
     * @return float
     */
    public function getCostPLHD(float $price, int $length, int $height, float $priceOptions):float
    {
        return ($price) * ($length/1000) * ($height/1000) + $priceOptions;
    }

}
