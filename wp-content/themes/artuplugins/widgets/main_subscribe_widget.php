<?php
class main_subscribe_widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'main_subscribe_widget_artu',
            __( 'Subscribe widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="subscribe">
            <div class="subscribe__letters"><svg width="614" height="174" viewBox="0 0 614 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:overlay">
                        <g opacity="0.3">
                            <rect x="184.202" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="73.0671" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" y="170.491" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" y="24.356" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" y="146.135" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="184.202" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="403.404" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="196.38" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="415.582" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="208.558" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="427.76" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="1.53369" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="220.736" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="439.938" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="13.7115" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="232.914" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="452.115" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="25.8895" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="245.091" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="464.293" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="38.0673" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="257.269" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="476.471" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="50.2452" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="269.447" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="488.649" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="62.4231" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="281.625" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="500.827" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="74.601" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="293.803" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="513.005" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="86.7789" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="305.981" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="525.183" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="147.668" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="366.87" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="586.072" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="98.9568" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="318.159" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="537.361" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="159.846" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="379.048" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="598.25" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="111.135" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="330.337" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="549.539" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="172.024" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="391.226" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="610.428" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="60.8896" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="123.312" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="342.514" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="561.716" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" y="12.178" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="85.2451" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="135.49" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="354.692" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                            <rect x="573.895" y="158.313" width="2.81028" height="2.81028" fill="white"/>
                        </g>
                        <rect x="403.404" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.693" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.693" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="403.404" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="415.582" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="427.76" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="366.87" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="379.048" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="391.226" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.693" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.692" y="36.5344" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.693" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="354.693" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="269.447" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="269.447" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="318.159" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="36.5344" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="232.914" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="245.091" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="257.269" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="269.447" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="269.447" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="281.625" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="293.803" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="305.981" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="318.159" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="318.159" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="184.202" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="196.38" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="123.312" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="135.49" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="184.202" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="184.202" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="196.38" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="196.38" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="147.668" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="159.846" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="172.024" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="123.312" y="36.5344" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="123.312" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="135.49" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="135.49" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="38.0673" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="38.0673" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="50.2452" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="50.2452" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53381" y="36.5344" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="1.53369" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="13.7115" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="25.8895" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="38.0673" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="38.0673" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="50.2452" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="50.2452" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="62.4231" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="74.601" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="86.7789" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="500.827" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="500.827" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="500.827" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="537.361" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="537.361" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="537.361" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="97.4233" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="73.0674" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="121.779" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="48.7117" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="36.5344" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="464.293" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="476.471" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="488.649" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="500.827" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="500.827" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="513.005" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="525.183" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="537.361" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="537.361" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="549.539" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="561.716" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="109.601" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="85.2454" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="36.5337" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="133.957" width="2.81028" height="2.81028" fill="white"/>
                        <rect x="573.895" y="60.8899" width="2.81028" height="2.81028" fill="white"/>
                    </g>
                </svg>
            </div>
            <div class="container subscribe__container">
                <h2 class="title subscribe__title"><?= $instance['title']?></h2>
                <?= do_shortcode('[contact-form-7 id="'.get_field('form','widget_'.$args['widget_id']).'" html_class="main-form subscribe__form"]');?>
            </div>
        </section>
        <?php
        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    public function update( $new_instance, $old_instance ) {

        $instance = $new_instance;
        return $instance;

    }
    public function form( $instance ) {
        ?>
        <div class="main-widget">
            <label>
                Заголовок
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'title' ))?>" value="<?= esc_attr($instance['title'])?>"/>
            </label>
        </div>
        <?php

        $this->admin_print_script();
    }
    static $done = false;
    public function admin_print_script() {


        if ( $this->done ) {
            return;
        }
        if($this->number!=='__i__')
            return;
        $this->done = true;

        ?>


        <?php
    }
}