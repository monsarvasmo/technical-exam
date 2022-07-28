# LWS Technical Exam

This document contains [LWS](https://github.com/lwshq)'s technical exam.  This is a standard 
application that provides a simple organizer for the user to store notes
and TODOs. You have 48 hours to send your PR and Answer the questions, complete or not.

## Instructions

  1. Fork this repository on your own personal GitHub account.
  2. Download your fork, build this app, and begin making changes.
  3. When finished, send an email containing your forked github repository to [@aindong](https://github.com/aindong) to let him know you're ready for
     review.
  4. We will close the fork after review.

  You may also submit your commits using =git format-patch=, should you
  prefer it over GitHub PRs.

## Specifications


`If you are applying for Backend, Disregard typescript and use pure Laravel.`

`If you are applying for a Frontend, Disregard the API Task and proceed with frontend only.`

`If you are applying for Full-Stack, You need to work on both API and Frontend in TypeScript.`


  1. The app consists of two major activities:
     - a note-taking activity that accepts a `title` and `text` for one
       or more notes
     - a TODO tracking activity that accepts an `entry`, with a
       `checkbox` to show whether this entry has been done or not done
  2. The app should have a user interface that allows for easy access
     between the note-taking and TODO tracking activities as well as to
     see their details at a glance.
  3. The note-taking activity should provide a view for its notes in a
     reverse-chronological order, with options for updating and deleting
     old notes.
  4. The TODO-tracking activity should provide a view for its entries
     with options for updating and deleting old TODOs.
  5. The app should make it easy to switch between the note-taking and
     TODO-tracking activities.
  6. The app should make it easy to switch a note to a TODO entry, and
     vice versa.
  7. The app should consists of both frontend and backend.
  8. Use `TypeScript` for the frontend and backend
  9. Include Unit/Functional Tests and make sure both has 70% and up test coverage
  10. Wrap everything and make sure we can run both frontend and backend easily.

## Questions

  In your PR/patch email, please also answer these following questions:

  What design patterns did you use inside the application?
  - Repository PatternHow did you manage your states?What data protocol did you use to connect both backend and frontend?
  - I used HTTP Protocol
  Is this the best way to integrate data?
  - Based on my experience HTTP is the best way to integrate data.If yes, Why?
  -  HTTP is an extensible protocol that is easy to use and it is readable.If no, Can you suggest more better ways?What libraries did you use?Why did you use this library?
  - I did not used libraryAre there other libraries available?If yes, what made you choose this library over the others?What major challenges did you encounter when making the app?
  - The challenges that I encountered while making the app is making it from scratch, because in my previous experiences I have only maintained a system and the Front-end side.If you had more time, what additional features would you like to add?
  - If I had more time, the features I would like to add is the Authentication to make each users their own To do and Notes and I would also like to add the API's functions

  In addition, you may provide more information in your PR/patch email
  that you would like us to know.

## Bonus Questions
  - Explain Hoisting to a 5 year old kid.
    -I'm not that familiar in Hoisting, but based from my understanding,if I were to explain Hoisting to a 5 year old kid, I will compare it to a free taste ice cream, you will be able to taste it but it is not yet yours if you haven't bought it.
  - Explain Memoization to a 5 year old kid.
    - If I were to explain Memoization to child I will compare it to giving reward when he/she is being obient and being a good kid, so that he/she will be motivated to do good and be obedient. 
## Notes

  - You may use any open source libraries that you think would be useful
    for completing the test and improving this app.
  - You may implement the user interface in any way that you feel may
    improve the user experience.
  - You may use any development tools you have at your disposal to
    complete this test, so long as the resulting app is a standard
    JS/NodeJS/PHP application that can be built using the standard tooling
