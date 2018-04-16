<?php

namespace Model\Entity;


class AbstractEntity
{
    /**
     * @param array $row
     * @param array $exclude
     * @return $this
     */
    public function populate(array $row, array $exclude)
    {
        foreach ($row as $key => $value) {
            if (in_array($key, $exclude)) {
                continue;
            }
            $method = 'set' . ucfirst($key);
//            if (!method_exists($this, $method)) {
//                continue;
//            }
            $this->$method($value);
        }
        return $this;
    }
}