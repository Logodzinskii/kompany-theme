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
        $this->kitchenBoxMiddleHeight = '600';
        $this->kitchenBoxTopHeight = $this->heightKitchenTotal - $this->heightKitchenBoxDown - $this->kitchenBoxMiddleHeight;

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

    /**
     *
     */
    public function sumBaseComplectations()
    {
        //антресоли + верхние модули + длинна Б + шкаф под мойку + под посудомойку + 3 ящика + бутылошница
        $priceBox = $this->priceBox;
        $priceFacade = $this->priceFacade;
        $lTolal = $this->kitchenTotalLength;

        $costKitchenTopBox = $this->getCostPLH($priceBox, $lTolal, $this->kitchenBoxTopHeight);
        $costKitchenTopFacades = $this->getCostPLH($priceFacade, $lTolal, $this->kitchenBoxTopHeight);

        $costKitchenMiddleBox = $this->getCostPLH($priceBox, $lTolal, $this->kitchenBoxMiddleHeight);
        $costKitchenMiddleFacades = $this->getCostPLH($priceFacade, $lTolal, $this->kitchenBoxMiddleHeight);

        $costKitchentypeBBox = $this->getCostPLH($priceBox, $this->kitchenLengthTypeB, $this->heightKitchenBoxDown);
        $costKitchentypeBFacades = $this->getCostPLH($priceFacade, $this->kitchenLengthTypeB, $this->heightKitchenBoxDown);

        $costKitchenBoxWashingBox = $this->getCostPLH($priceBox, $this->kitchenBoxWashingLength, $this->heightKitchenBoxDown);
        $costKitchenBoxWashingFacades = $this->getCostPLH($priceFacade, $this->kitchenBoxWashingLength, $this->heightKitchenBoxDown);

        $costKitchenBoxDishwasherBox = $this->getCostPLH($priceBox, $this->kitchenBoxDishwasherLength, $this->heightKitchenBoxDown);
        $costKitchenBoxDishwasherFacades = $this->getCostPLH($priceFacade, $this->kitchenBoxDishwasherLength, $this->heightKitchenBoxDown);

        $costKitchenBoxShelvesBox = $this->getCostPLHD($priceBox, $this->kitchenBoxShelvesLength, $this->heightKitchenBoxDown, 7500);
        $costKitchenBoxShelvesFacades = $this->getCostPLHD($priceFacade, $this->kitchenBoxShelvesLength, $this->heightKitchenBoxDown, 7500);

        $costKitchenBottleMakerBox = $this->getCostPLHD($priceBox, $this->kitchenBottleMakerLength, $this->heightKitchenBoxDown, 2500);
        $costKitchenBottleMakerFacades = $this->getCostPLHD($priceFacade, $this->kitchenBottleMakerLength, $this->heightKitchenBoxDown, 2500);

        $costBox = $costKitchenTopBox + $costKitchenMiddleBox + $costKitchentypeBBox + $costKitchenBoxWashingBox + $costKitchenBoxDishwasherBox + $costKitchenBoxShelvesBox + $costKitchenBottleMakerBox;
        $costFacades = $costKitchenTopFacades + $costKitchenMiddleFacades + $costKitchentypeBFacades + $costKitchenBoxWashingFacades + $costKitchenBoxDishwasherFacades + $costKitchenBoxShelvesFacades + $costKitchenBottleMakerFacades;

        //return $costBox . '=' . $costKitchenTopBox .'+'. $costKitchenMiddleBox .'+'. $costKitchentypeBBox .'+'. $costKitchenBoxWashingBox .'+'. $costKitchenBoxDishwasherBox .'+'. $costKitchenBoxShelvesBox;
        return $costBox + $costFacades;
    }

}
