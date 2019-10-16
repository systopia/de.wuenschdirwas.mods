CRM.$(document).ready(function () {
  CRM.$(document).on('crmLoad', '#case_id_' + CRM.vars.mods.caseId, function(event) {
    var $this = CRM.$(this);
    if (!$this.data('initialized')) {
      $this.data('initialized', true);
      $this.find('th[data-data="activity_date_time"]').click();
    }
  });
});
