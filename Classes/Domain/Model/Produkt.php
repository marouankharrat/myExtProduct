<?php

declare(strict_types=1);

namespace Myextproduct\Myextproduct\Domain\Model;


/**
 * This file is part of the "myextproduct" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * Produkt
 */
class Produkt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = null;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = null;

    /**
     * gewicht
     *
     * @var float
     */
    protected $gewicht = 0.0;

    /**
     * farbe
     *
     * @var int
     */
    protected $farbe = 0;

    /**
     * category
     *
     * @var \Myextproduct\Myextproduct\Domain\Model\Category
     */
    protected $category = null;

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser(string $teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the category
     *
     * @return \Myextproduct\Myextproduct\Domain\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \Myextproduct\Myextproduct\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Myextproduct\Myextproduct\Domain\Model\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the gewicht
     *
     * @return float
     */
    public function getGewicht()
    {
        return $this->gewicht;
    }

    /**
     * Sets the gewicht
     *
     * @param float $gewicht
     * @return void
     */
    public function setGewicht(float $gewicht)
    {
        $this->gewicht = $gewicht;
    }

    /**
     * Returns the farbe
     *
     * @return int
     */
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * Sets the farbe
     *
     * @param int $farbe
     * @return void
     */
    public function setFarbe(int $farbe)
    {
        $this->farbe = $farbe;
    }
}
