
$("#integration-tab").addClass("partner-type-tab-active");
$("#integration").addClass("show-grid");


$("#client-tab").click(function(){
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#client").addClass("show-grid");
});

$("#integration-tab").click(function(){
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#marketing").removeClass("show-grid");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#integration").addClass("show-grid");
});

$("#insurance-tab").click(function(){
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#client").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#insurance").addClass("show-grid");
});

$("#marketing-tab").click(function(){
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#marketing").addClass("show-grid");
})


$("#staking-tab").click(function(){
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#staking").addClass("show-grid");
});


$("#audit-tab").click(function(){
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#audit").addClass("show-grid");
})

$("#payment-gateway-tab").click(function(){
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $("#exchange-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#exchange").removeClass("show-grid");
  $("#payment-gateway").addClass("show-grid");
})
$("#exchange-tab").click(function(){
  $("#insurance-tab").removeClass("partner-type-tab-active");
  $("#client-tab").removeClass("partner-type-tab-active");
  $("#integration-tab").removeClass("partner-type-tab-active");
  $("#marketing-tab").removeClass("partner-type-tab-active");
  $("#staking-tab").removeClass("partner-type-tab-active");
  $("#payment-gateway-tab").removeClass("partner-type-tab-active");
  $("#audit-tab").removeClass("partner-type-tab-active");
  $(this).addClass("partner-type-tab-active");
  $("#client").removeClass("show-grid");
  $("#insurance").removeClass("show-grid");
  $("#marketing").removeClass("show-grid");
  $("#integration").removeClass("show-grid");
  $("#staking").removeClass("show-grid");
  $("#audit").removeClass("show-grid");
  $("#payment-gateway").removeClass("show-grid");
  $("#exchange").addClass("show-grid");
})