# Instructions

Create a very simple (nothing complex) website, with the following features:

## Editable Footer.

Footer should have at minimum one footer item that is editable and configurable by the end user. Ideally, this would be done via Widgets / Custom Sidebars so the user can place / remove things from there at will and control their editing experience.

## CSS Framework

Theme should use bootstrap grids, the starter theme includes packaged assets ready to go and the core bootstrap fundamentals should be used to structure/style the website.


## Custom Navigation

The starter theme defines a `Primary_Navigation` custom walker, but this should be extended to fit Bootstrap's markup and style and perhaps add some flair to it also.

## Gutenburg Blocks

Site should at least have one custom gutenburg block (not a standard WP one but it can be a part of their InnerBlocks) to do something of the users choice. Use your imagination for this one. The theme provides the ability to create custom blocks and integrate them with the theme itself. See the `README.md` inside the starter theme.

Some examples:-
* A list of pills that have a Heading + Icon + Some Description Text.
* Callout blocks with a Heading + Icon with the option of Text/No Text.
* Display a list of recent posts of a custom post type, for example the required "Teams" one with a feature image / title.


## Custom Post Type

Should have at least one custom post type called "Teams", that has some custom meta fields for some additional information.
For example:   
 * The date the team member started.
 * What their job title is.


## Styling

Apply some custom styles using the provided `SCSS` files to alter heading styles and default paragraph stylings. Also use it to improve the looks of the custom gutenburg block.

## Summary

In summary, the requirments are:-

* Header with custom navigation walker.
* Footer with sidebar/widget.
* Content Section including 1 custom Gutenburg Block.

The design / style of the site can be as nice or basic as you wish, as the way it looks isn't as important as the ability to operate within the CMS itself and apply core principals.