# Project Lab
> BlueSalt Labs

Track and organize your projects. 

-----

## Original Notes

* **Project**
    * **Umbrella Task**
        * Large overarching tasks you know probably have many small ones
          huddling underneath.  
    * **Mini Tasks**
        * Checklists
        * Timestamps
        * calendar compatible
        * assignments
        * links/photos 
    * **Project Notes / Notes**
        * These can be attached to any of the above or stand on their own
* **Event (Schedule?)**
    * Time slots that you can attach tasks in
    * This can contain any of the above and essentially schedules when you
      plan on completing the attached tasks
    * "might turn a task into an event"


-----

## Model Thoughts

* **User**
    * Any of the items below should be associated with a user_id, either
      directly or indirectly(?) 
* **Project**
    * basically a parent container
    * Root parent element (excluding Events, see below)
    * Could also be called a 'category'? 
* **Project Item**
    * See descriptions for umbrella task and mini tasks above
    * Can have 1 parent and many children
    * can be associated with 1 project
* **Note**
    * Can be attached to anything or stand on its own
        * `parent_id (int)`, `parent_type (Class string)`
    * []
* **Event**
    * Time slots that you can attach one or more tasks in
    * These would probably be created within the task (`ProjectItem`) itself,
      like maybe you could schedule a time to complete the task within the task
      or, if viewing a list of tasks, select multiple and "Create an event from"
      the selected tasks.
    * Notes could also be added to an event
    * `EventsToChildren` pivot table?
* **Item**
    * Basically anything else not covered above. I'm thinking this would include
      Tags, but that may need to be its own model.
* **Item Type**
    * Defines types of `Item`s
        * Image
        * Document
        * Tag/label?
        * Category?
        * Video?
        * user-defined
* **Data Item**
* **Dashboard**
    * There's a default one for every new user, but this would allow you to define
      what you see (like what projects/project items/notes/etc.) 

-----

# Interface Thoughts

* Single-page Vue SaaS built on Vue, Vue-Router, (Bootstrap 4?)
* Mobile friendly (obviously)


-----
