<div class="regle">
    <div style="margin-left: 10px; margin-top: 20px; width: 670px;">
    <?php $rules1 = array('type' => '','title' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_title'),'nbSubSection' => '5',
    	Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_legende_1'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_score_1')),
        Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_legende_2'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_score_2')),
        Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_legende_3'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_score_3')),
        Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_legende_4'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_score_4')),
        Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_legende_5'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_1_score_5'))
        ) ?>
        
        <?php include_component('kup', 'rulesTable', array('rules' => $rules1)) ?>   
        
        <?php $rules2 = array('type' => '','title' => __('rugby_kup_wc_2011_la_totale_ruleBloc_2_title'),'nbSubSection' => '1',
    	Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_2_legende_1'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_2_score_1'))
          ) ?>
        
        <?php include_component('kup', 'rulesTable', array('rules' => $rules2)) ?>  
        
        <?php $rules3 = array('type' => 'choc','title' => __('rugby_kup_wc_2011_la_totale_ruleBloc_3_title'),'nbSubSection' => '2',
    	Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_3_legende_1'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_3_score_1')),
		Array('orange' => '','legende' => __('rugby_kup_wc_2011_la_totale_ruleBloc_3_legende_2'),'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => __('rugby_kup_wc_2011_la_totale_ruleBloc_3_score_2'))
    	) ?>
        
        <?php include_component('kup', 'rulesTable', array('rules' => $rules3)) ?> 
        
    </div>
</div>