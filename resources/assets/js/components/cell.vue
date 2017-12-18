<template>
	<div :class="live_item ? 'cell-live' : 'cell'">{{x}}-{{y}}</div>>
</template>

<script >
	
	export default{
		props:['x','y'],
		data(){
			return{
				live:Math.round(Math.random())
			}
		},
		computed:{
			live_item(){
				return this.live;
			}
		},
		created(){
			eventBus.$on('change', function(){
				console.log(this.$parent);
				this.live= Math.round(Math.random());
			}.bind(this));
		},
		methods:{
			something(){
				return{
					x: this.x,
					y: this.y,
					status: this.live
				};
			},
		}
	}

</script>

<style >
	
	.cell{
		background-color: rgb(0,0,0);
		width: 100px;
		height: 100px;
	}
	.cell-live{
		background-color: rgb(125,125,125);
		width: 100px;
		height: 100px;
	}

</style>