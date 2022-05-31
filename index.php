 <!-- events section -->
    <section id="events-section" class="grid">
      <h2>Upcoming Events</h2>
      <div class="events">
      <?php $events = get_events(); ?>
    <?php foreach ($events as $event) : ?>
      <?php
  $file = $event['name'];
  $image_src = "./admin/images/" . $file;
  ?>
        <div class="card">
          <img src="<?php echo $image_src ?>" alt="" />
          <div style="display: flex;flex-direction:column;align-items: center;justify-content: center;">
         <span>Event name: <?php echo $event['event_name'] ?></span>
         <span>Event location: <?php echo $event['event_location'] ?></span>
         <span>Date: <?php echo $event['event_date'] ?></span>
    </div>
          <div style="word-wrap: break-word;">
          <?php echo $event['info'] ?>
    </div>
        </div>
      <?php endforeach ?>
      </div>
    </section>
