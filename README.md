# local-search-url-generator
Generate a google search query with a location - easier than typing it in

# notes
This page is javascript only, no serverside code required (even tho it is saved as .php)

This is a tool to help create a local search. You enter your search query like "emergency plumbers" and in the second field start typing your location "Hous", it will autocomplete "Houston TX, USA"
Once you select a location, or click find, a URL will be created that you can click on to see the results as if you were
in the Houston TX area.

# dependancies

this code uses the geocomplete.js from Martin Kleppe, included in this repo in the js folder

/**
 * jQuery Geocoding and Places Autocomplete Plugin - V 1.6.4
 *
 * @author Martin Kleppe <kleppe@ubilabs.net>, 2014
 * @author Ubilabs http://ubilabs.net, 2014
 * @license MIT License <http://www.opensource.org/licenses/mit-license.php>
 */

It also uses google's maps api , and jquery (linked to their CDNs within the page source)

