
<div class="col-md-4"> 
        <?php if(is_active_sidebar('sidebar')):?>
              <?php dynamic_sidebar('sidebar');?>
        <?php endif; ?>
    </div>
      </div>
    </div>
  </div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name')?></p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer();?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src =" <?php bloginfo('template_url');?>/js/bootstrap.js"></script>
</body>
</html>