# phpStuff
For experiments with PHP on projects

Three pages to support selecting and reading a letter

## First page: getYears.php

_What it does:_ displays a list of years in the corpus

_How it works:_ Runs `letterDates.xql` and pokes output (sequence of `<li>` elements) into return page

_How it looks:_

	<li><a href="getLetterList.php?year=1810">1810</a></li>
	<li><a href="getLetterList.php?year=1811">1811</a></li>

_What the user does next:_ Choose a year

_What happen:_ Returns second page by calling `getLetterList.php?year=1810` (or other year), with list of letters from that year

##Second page: getLetterList.php

_What it does:_ Displays brief-form list of letters from the selected year

_How it works:_ Runs and retrieves `letterList.xql?year=1810` (or other selected year)

_How it looks:_

    <li><a href="getLetterText.php?uri=1819-05-12_Elford.xml">Title of some letter from the selected year</a></li>
    <li><a href="getLetterText.php?uri=1819-06-19_Elford.xml">Title of some other letter from the same selected year</a></li>
    
_What the user does next:_ Choose a letter

_What happens:_ Returns third page, with formatted letter, by calling `getLetterText.php?uri=1819-05-16_Elford.xml`, where the value of the `uri` parameter is the filename of a single letter in the database

##Third page: getLetterText.php

_What it does:_ Display a reading view of the chosen letter

_How it works:_ `letterText.xql`  

_How it looks:_

    <h1>Blah blah blah ...</h1>
    <!-- more markup -->

_What the user does:_ Read or interact with the letter

