<?php

class Language
{
    private $language;
    private $default;
    private $list;
    private $words;

    /**
     * Language constructor.
     *
     * @param $language_config
     */
    public function __construct($language_config)
    {
        $this->default = $language_config['default'];
        $this->list = $language_config['list'];
        $this->words = array();

        $this->setLang();
    }

    /**
     * @return void
     */
    public function setLang(): void
    {
        $language = $this->default;

        if (isset($_GET['l'])) {
            $language = $_GET['l'];
        }

        $this->language = $language;
    }

    /**
     * @param $name
     *
     * @return void
     */
    public function words($name): void
    {
        require_once(__DIR__ . DIRECTORY_SEPARATOR . $this->language . '/' . $name . '.' . 'php');
        $this->words = array_merge($this->words, $lang);
    }

    /**
     * @param $name
     * @return String|null
     */
    public function lang($name): ?String
    {
        return isset($this->words[$name]) ? $this->words[$name] : null;
    }
}