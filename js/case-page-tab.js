CRM.$(document).ready(function () {
  CRM.$(document).on('crmLoad', '#case_id_' + CRM.vars.mods.caseId, function(event) {
    var $this = CRM.$(this);
    if (!$this.data('initialized')) {
      $this.data('initialized', true);
      $this.DataTable()
        .order([0, 'asc'])
        .draw();
    }
  });
});
