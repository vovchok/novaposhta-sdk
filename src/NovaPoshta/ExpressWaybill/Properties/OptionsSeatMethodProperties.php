<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class OptionsSeatMethodProperties extends MethodProperties
{
    public function getVolumetricVolume()
    {
        return $this->__get('volumetricVolume');
    }

    public function setVolumetricVolume($volumetricVolume)
    {
        $this->__set('volumetricVolume', $volumetricVolume);
    }

    public function getVolumetricWidth()
    {
        return $this->__get('volumetricWidth');
    }

    public function setVolumetricWidth($volumetricWidth)
    {
        $this->__set('volumetricWidth', $volumetricWidth);
    }

    public function getVolumetricLength()
    {
        return $this->__get('volumetricLength');
    }

    public function setVolumetricLength($volumetricLength)
    {
        $this->__set('volumetricLength', $volumetricLength);
    }

    public function getVolumetricHeight()
    {
        return $this->__get('volumetricHeight');
    }

    public function setVolumetricHeight($volumetricHeight)
    {
        $this->__set('volumetricHeight', $volumetricHeight);
    }

    public function getWeight()
    {
        return $this->__get('weight');
    }

    public function setWeight($weight)
    {
        $this->__set('weight', $weight);
    }
}
