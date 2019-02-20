# **NFL Favourite Team**
---

This is the milestone project for the Interactive Frontend Development milestone project  module for Code Institute.
This is a data dashboard that visualizes the dataset from nfl-favourite-team which grades the 32 NFL teams by categories, to be used to pick a new favourite team.


## Starting the project
After locating the nfl favourite team data I decided to display this data to visually aid American Football fans to select a favourite team easily.
I started by selecting the most useful categories and generating the graphs. 
Once the graphs were completed I added the header and information but felt the page was lacking.
After speaking to fans I discovered that location is a big factor of which team to support and so I included a map with all the locations of each teams stadium. (This is the first factor on the page as fans made it clear this was ver important.)
Following on from this I was curious of how popular each team is and so created the poll at the end.


## Strategy for the project
### What the project does
* This is a data dashboard that helps users to pick a new favourite NFL team using location and/or categories and then enables them to pick via a poll at the end which will then show the results of the poll.

### The need it fulfills
* To help fans of American Football to pick a favourite team.

### Target audience
* American Football fans


# How the website is setup
---
The body of the website is set up into

*A header with information regarding how to use the site and additional information in a drop down about the National Football League. A drop down is used to save space.


* A map section
Includes a list and key of the 32 NFL teams and a map showing the location of each teams stadium.

* Dashboard content

There is an comment on where the data is retrieved from followed by a team selector and 6 graphs.

The first two graphs are stacked graphs with a brief explanation to the categories. 
These are laid out with the categories section next to the graph but the categories sections locates to below when viewed on mobile screens.


The following four graphs are laid out in rows of two with the title above and explanation to each graph below. 
These change to stack ontop of each other when viewed on mobile screen.

All graphs were created by using dc.js which plucks the different teams from the nfl-data file and for the category selected, the corresponding value and displays this value on a graph.
Graphs would spill over in mobile view so to combat this problem, a chart wrapper was used.


* Poll
When creating this dashboard I was looking for a way to find out which team was the favourite team overall. 
I had thought of putting a form at the bottom of this page so you could vote for your favourite team and an email would be sent but this would then mean more work to calculate the results.
So i build a javascript poll which consisted of buttons labelled with each team and the user could click on their favourite team and this would save to the poll and show the result in html.(Please note this poll was created and is under the github repository github.com/skies09/nfl-js-poll)
The problem with this approach is that the user could click on their favourite team but once the html was shut down this vote would be cleared. Also, if a diffferent user was viewing the site, it would not save the total of a the users.
To combat this approach I decided to use the dynamic PHP language which worked very similar to javascript but was able to save the results into a file.
I first created the poll with the input buttons that the user could click. I then created an array linking all 32 teams with the input buttons on the index.html as I would have done with javascript.
I then created a calculator which could add the votes/tally the array. These votes are then added into a poll_result.txt file and saved. The results are then displayed on a table which have been calculated as a percentage of all the votes overall.
This has been tested by voting on every team to make sure all the buttons work and all the results are calculated.

**



---


###### Extras
* This project has been deployed to github pages*




---

##### What was used in the website

* Google fonts
* Bootstrap 3.3.7
* Font awesome 4.7.0
* cdnjs cloudflare
* jQuery 3.2.1

---

#### Ways of testing
###### Browsers tested on

* Chrome
* Safari
* Firefox
* Mozilla

###### Devices tested on
* iphone
* ipad
* Macbook air
* Nokia 8
* Pixel 2