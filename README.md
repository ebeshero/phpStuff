# phpStuff
for experiments with PHP on projects

Three pages to support selecting and reading a letter

## First page

_What it does:_ displays a list of years in the corpus

_How it looks:_

	<li>1810</li>
	<li>1811</li>

_What the user does:_ Choose a year

_What happen:_ Returns second page, with list of letters from that year

##Second page

_What it does:_ Displays brief-form list of letters from the selected year

_How it looks:_

    <li>Title of some letter from the selected year</li>
    <li>Title of some other letter from the same selected year</li>
    
_What the user does:_ Choose a letter

_What happens:_ Returns third page, with formatted letter

##Third page

_What it does:_ Display the chosen letter

_How it looks:_

    <h1>Blah blah blah ...</h1>
    <!-- more markup -->

_What the user does:_ Read or interact with the letter

