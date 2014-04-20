<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tinaboone.com Style Guide</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <div class="grid-container">
        <h1>tinaboone.com Style Guide</h1>
        <h2>Colors</h2>
        <div>
            <ul class="sg-colors">
                <li class="sg-color">
                    <span class="sg-swatch" style="background:#6485da;"></span>
                    <span class="sg-label">#6485da</span>
                </li>
                <li class="sg-color">
                    <span class="sg-swatch" style="background:#c7ae3a;"></span>
                    <span class="sg-label">#c7ae3a</span>
                </li>
            </ul>
        </div>
        <h2>Fonts</h2>
        <div>
            <p>Primary font: Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;</p>
            <p><em>Primary font italic: Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;</em></p>
            <p><strong>Primary font bold: Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;</strong></p>
            <!-- <p class="font-secondary">Secondary font: Georgia, Times, "Times New Roman", serif;</p>
            <p class="font-secondary"><em>Secondary font italic: Georgia, Times, "Times New Roman", serif;</em></p>
            <p class="font-secondary"><strong>Secondary font bold; Georgia, Times, "Times New Roman", serif;</strong></p> -->
        </div>
        <!-- <h2>Animations</h2>
        <div></div> -->
        <!-- <h2>Visibility</h2>
        <div></div> -->
        <h2>Headings</h2>
        <div data-xrayhtml><h1>Heading Level 1</h1>
            <h2>Heading Level 2</h2>
            <h3>Heading Level 3</h3>
            <h4>Heading Level 4</h4>
            <h5>Heading Level 5</h5>
            <h6>Heading Level 6</h6></div>
        <h2>Paragraph</h2>
        <div>
            <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
        </div>
        <h2>Blockquote</h2>
        <div>
            <blockquote>
                <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation.</p>
            </blockquote>
        </div>
        <h2>Inline Elements</h2>
        <div>
            <p><a href="#">This is a text link</a></p>
            <p><strong>Strong is used to indicate strong importance</strong></p>
            <p><em>This text has added emphasis</em></p>
            <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>
            <p>The <i>i element</i> is text that is set off from the normal text</p>
            <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>
            <p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>
            <p><s>This text has a strikethrough</s></p>
            <p>Superscript<sup>Â®</sup></p>
            <p>Subscript for things like H<sub>2</sub>O</p>
            <p><small>This small text is small for for fine print, etc.</small></p>
            <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
            <p>Keybord input: <kbd>Cmd</kbd></p>  <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>
            <p><cite>This is a citation</cite>
            </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>
            <p>The <mark>mark element</mark> indicates a highlight</p>
            <p><code>This is what inline code looks like.</code></p>
            <p><samp>This is sample output from a computer program</samp></p>
            <p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>
        </div>
        <h2>Time</h2>
        <div><time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></div>
        <!-- <h2>Preformatted Text</h2>
        <div></div> -->
        <h2>Hr</h2>
        <div><hr></div>
        <h2>Unordered</h2>
        <div>
            <ul>
                <li>This is a list item in an unordered list</li>
                <li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
                <li> Lists can be nested inside of each other
                    <ul>
                        <li>This is a nested list item</li>
                        <li>This is another nested list item in an unordered list</li>
                    </ul>
                </li>
                <li>This is the last list
                </li>
            </ul>
        </div>
        <h2>Ordered</h2>
        <div>
            <ol>
                <li>This is a list item in an ordered list</li>
                <li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
                <li> Lists can be nested inside of each other
                    <ol>
                        <li>This is a nested list item</li>
                        <li>This is another nested list item in an ordered list</li>
                    </ol>
                </li>
                <li>This is the last list item</li>
            </ol>
        </div>
        <h2>Definition</h2>
        <div>
            <dl>
                <dt>Definition List</dt>
                <dd>A number of connected items or names written or printed consecutively, typically one below the other.</dd>
                <dt>This is a term.</dt>
                <dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>
                <dt>Here is another term.</dt>
                <dd>And it gets a definition too, which is this line.</dd>
                <dt>Here is term that shares a definition with the term below.</dt>
                <dd>And it gets a definition too, which is this line.</dd>
            </dl>
        </div>
        <h2>Logo</h2>
        <div><a href="#"><img src="../../images/logo.png" class="logo" alt="Logo Alt Text"></a></div>
        <h2>Landscape 4x3</h2>
        <div>
            <img src="../../images/fpo_4x3.png" alt="4x3 Image">
        </div>
        <h2>Landscape 16x9</h2>
        <div>
            <img src="../../images/fpo_16x9.png" alt="16x9 Image">
        </div>
        <h2>Square</h2>
        <div>
            <img src="../../images/fpo_square.png" alt="Square Thumbnail">
        </div>
        <!-- <h2>Avatar</h2>
        <div></div> -->
        <h2>Icons</h2>
        <div>
            <ul class="icons inline-list">
                <li class="icon-twitter"></li>
                <li class="icon-facebook"></li>
                <li class="icon-stumbleupon"></li>
                <li class="icon-linkedin"></li>
                <li class="icon-pinterest"></li>
                <li class="icon-google-plus"></li>
                <li class="icon-youtube"></li>
                <li class="icon-feed"></li>
                <li class="icon-search"></li>
                <li class="icon-play"></li>
            </ul>
        </div>
        <h2>Loading Icon</h2>
        <div>
            <img src="../../images/ajax-loader.gif" alt="Loading">
        </div>
        <h2>Favicon</h2>
        <div>
            <img src="../../images/favicon_16x16.jpg">
            <img src="../../images/favicon_32x32.jpg">
        </div>
        <h2>Text Fields</h2>
        <div>
            <fieldset>
                <div class="field-container">
                    <label for="text">Text Input <abbr title="Required">*</abbr></label>
                    <input id="text" type="text" placeholder="Text Input">
                </div>
                <div class="field-container">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Type your Password">
                </div>
                <div class="field-container">
                    <label for="webaddress">Web Address</label>
                    <input id="webaddress" type="url" placeholder="http://yoursite.com">
                </div>
                <div class="field-container">
                    <label for="emailaddress">Email Address</label>
                    <input id="emailaddress" type="email" placeholder="name@email.com">
                </div>
                <div class="field-container">
                    <label for="search">Search</label>
                    <input id="search" type="search" placeholder="Enter Search Term">
                </div>
                <div class="field-container">
                    <label for="text">Number Input <abbr title="Required">*</abbr></label>
                    <input id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*">
                </div>
                <div class="field-container">
                    <label for="textarea">Textarea</label>
                    <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
                </div>
                <div class="field-container">
                    <label class="error">Error Input</label>
                    <input class="is-error" type="text" placeholder="Text Input">
                </div>
                <div class="field-container">
                    <label class="valid">Valid</label>
                    <input class="is-valid" type="text" placeholder="Text Input">
                </div>
            </fieldset>
        </div>
        <h2>Select Menu</h2>
        <div>
            <fieldset>
                <div class="field-container">
                    <label for="select">Select</label>
                    <select id="select">
                        <optgroup label="Option Group">
                            <option>Option One</option>
                            <option>Option Two</option>
                            <option>Option Three</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
        </div>
        <h2>Checkbox</h2>
        <div>
            <form action="#">
                <fieldset class="options">
                    <legend>Checkbox <abbr title="Required">*</abbr></legend>
                    <ul>
                        <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
                        <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
                        <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
                    </ul>
                </fieldset>
            </form>
        </div>
        <h2>Radio Buttons</h2>
        <div>
            <form action="#">
                <fieldset class="options">
                    <legend>Radio</legend>
                    <ul>
                        <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
                        <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
                        <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
                    </ul>
                </fieldset>
            </form>
        </div>
        <h2>HTML5 Inputs</h2>
        <div>
            <fieldset>
                <div class="field-container">
                    <label for="ic">Color input</label>
                    <input type="color" id="ic" value="#000000">
                </div>
                <div class="field-container">
                    <label for="in">Number input</label>
                    <input type="number" id="in" min="0" max="10" value="5">
                </div>
                <div class="field-container">
                    <label for="ir">Range input</label>
                    <input type="range" id="ir" value="10">
                </div>
                <div class="field-container">
                    <label for="idd">Date input</label>
                    <input type="date" id="idd" value="1970-01-01">
                </div>
                <div class="field-container">
                    <label for="idm">Month input</label>
                    <input type="month" id="idm" value="1970-01">
                </div>
                <div class="field-container">
                    <label for="idw">Week input</label>
                    <input type="week" id="idw" value="1970-W01">
                </div>
                <div class="field-container">
                    <label for="idt">Datetime input</label>
                    <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
                </div>
                <div class="field-container">
                    <label for="idtl">Datetime-local input</label>
                    <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
                </div>
            </fieldset>
        </div>
        <h2>Buttons</h2>
        <div>
            <p><a href="#" class="btn">Button</a></p>
            <p><a href="#" class="btn alt">Alternate Button</a></p>
            <p><a href="#" class="btn disabled">Disabled Button</a></p>
            <p><a href="#" class="text-btn">Text Button</a></p>
        </div>
        <!-- <h2>Table</h2>
        <div></div> -->
        <h2>Byline</h2>
        <div>
            <div class="byline">by Author Name</div>
        </div>
        <h2>Address</h2>
        <div>
            <div class="vcard">
                <div class="org">Company Name</div>
                <div class="adr">
                    <div class="street-address">1234 Main St.</div>
                    <span class="locality">Anywhere</span>, <span class="postal-code">101010</span>, <abbr class="region" title="California">CA</abbr>
                    <div class="country-name">U.S.A</div>
                </div>
                <div class="tel">+1.888.123.4567</div>
            </div>
        </div>
        <h2>Heading Group</h2>
        <div>
            <div class="hgroup">
                <h2>This is the heading group's main heading</h2>
                <h3>This is the heading group's subheading</h3>
            </div>
        </div>
        <h2>Blockquote with Citation</h2>
        <div>
            <blockquote>
                <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation. </p>
                <cite class="citation">Quote Source</cite>
            </blockquote>
        </div>
        <h2>Intro Text</h2>
        <div>
            <p class="intro">The intro text may be a lead-in to the passage of text, or it may just be used to create a visual distinction between the rest of the passage of text.</p>
        </div>
        <h2>One Up</h2>
        <div></div>
        <h2>Two Up</h2>
        <div></div>
        <h2>Three Up</h2>
        <div></div>
        <h2>Four Up</h2>
        <div></div>
        <h2>Media Block</h2>
        <div></div>
        <h2>Block Headline Byline</h2>
        <div></div>
        <h2>Block Hero</h2>
        <div></div>
        <h2>Block Hero Thumbnail</h2>
        <div></div>
        <h2>Block Headline</h2>
        <div></div>
        <h2>Block Inset</h2>
        <div></div>
        <h2>Figure with Caption</h2>
        <div></div>
        <h2>Search</h2>
        <div></div>
        <h2>Comment Form</h2>
        <div></div>
        <h2>Newsletter</h2>
        <div></div>
        <h2>Primary Nav</h2>
        <div></div>
        <h2>Footer Nav</h2>
        <div></div>
        <h2>Breadcrumbs</h2>
        <div></div>
        <h2>Pagination</h2>
        <div></div>
        <h2>Tabs</h2>
        <div></div>
        <h2>Social Share</h2>
        <div></div>
        <h2>Accordian</h2>
        <div></div>
        <h2>Single Comment</h2>
        <div></div>
        <h2>Alert</h2>
        <div></div>
        <h2>Header</h2>
        <div></div>
        <h2>Footer</h2>
        <div></div>
        <h2>Article Body</h2>
        <div></div>
        <h2>Comment Thread</h2>
        <div></div>
        <h2>Latest Posts</h2>
        <div></div>
        <h2>Recent Tweets</h2>
        <div></div>
        <h2>Recent Posts</h2>
        <div></div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/X-rayHTML.js"></script>
    <!-- <script src="js/prism.js"></script> -->
</body>
</html>