<?php
namespace PHPePub\Core\Structure\OPF;

/**
 * Reference constants
 */
class Reference {
    const _VERSION = 3.30;

    /* REFERENCE types are derived from the "Chicago Manual of Style"
     */

    /** Acknowledgements page */
    const ACKNOWLEDGEMENTS = "acknowledgements";

    /** Bibliography page */
    const BIBLIOGRAPHY = "bibliography";

    /** Colophon page */
    const COLOPHON = "colophon";

    /** Copyright page */
    const COPYRIGHT_PAGE = "copyright-page";

    /** Dedication */
    const DEDICATION = "dedication";

    /** Epigraph */
    const EPIGRAPH = "epigraph";

    /** Foreword */
    const FOREWORD = "foreword";

    /** Glossary page */
    const GLOSSARY = "glossary";

    /** back-of-book style index */
    const INDEX = "index";

    /** List of illustrations */
    const LIST_OF_ILLUSTRATIONS = "loi";

    /** List of tables */
    const LIST_OF_TABLES = "lot";

    /** Notes page */
    const NOTES = "notes";

    /** Preface page */
    const PREFACE = "preface";

    /** Table of contents */
    const TABLE_OF_CONTENTS = "toc";

    /** Page with possibly title, author, publisher, and other metadata */
    const TITLE_PAGE = "titlepage";

    /** First page of the book, ie. first page of the first chapter */
    const TEXT = "text";

    // ******************
    // ePub3 constants
    // ******************

    // Document partitions
    /** The publications cover(s), jacket information, etc. This is officially in ePub3, but works for ePub 2 as well */
    const COVER = "cover";

    /** Preliminary material to the content body, such as tables of contents, dedications, etc. */
    const FRONTMATTER = "frontmatter";

    /** The main (body) content of a document. */
    const BODYMATTER = "bodymatter";

    /** Ancillary material occurring after the document body, such as indices, appendices, etc. */
    const BACKMATTER = "backmatter";


    private $type = NULL;
    private $title = NULL;
    private $href = NULL;

    /**
     * Class constructor.
     *
     * @param string $type
     * @param string $title
     * @param string $href
     */
    function __construct($type, $title, $href) {
        $this->setType($type);
        $this->setTitle($title);
        $this->setHref($href);
    }

    /**
     * Class destructor
     *
     * @return void
     */
    function __destruct() {
        unset($this->type, $this->title, $this->href);
    }

    /**
     *
     * Enter description here ...
     *
     * @param string $type
     */
    function setType($type) {
        $this->type = is_string($type) ? trim($type) : NULL;
    }

    /**
     *
     * Enter description here ...
     *
     * @param string $title
     */
    function setTitle($title) {
        $this->title = is_string($title) ? trim($title) : NULL;
    }

    /**
     *
     * Enter description here ...
     *
     * @param string $href
     */
    function setHref($href) {
        $this->href = is_string($href) ? trim($href) : NULL;
    }

    /**
     *
     * Enter description here ...
     *
     * @return string
     */
    function finalize() {
        return "\t\t<reference type=\"" . $this->type . "\" title=\"" . $this->title . "\" href=\"" . $this->href . "\" />\n";
    }
}