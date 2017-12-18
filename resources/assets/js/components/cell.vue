<template>
	<div :class="live_item ? 'cell-live' : 'cell'">{{x}}-{{y}}</div>
</template>

<script >
	
	export default{
		props:['x','y'],
		data(){
			return{
				//live:Math.round(Math.random())
				live:1,
				is_live:0
			}
		},
		computed:{
			live_item(){
				return this.live;
			}
		},
		created(){
			eventBus.$on('status', function(data){
				//console.log(this.$parent);
				//this.live= Math.round(Math.random());
				if (this.x == data.x && this.y == data.y)
				return false;

				let x = $.inArray(data.x[this.x - 1, this.x, this.x+1]);
				let y = $.inArray(data.y[this.y - 1, this.y, this.y+1]);

				if(x!= =1 && y != -1){
					this.is_live ++;
					console.log(this.is_live);
				}

			}.bind(this));
		},
		methods:{
			something(){
				this.is_live = 0;
				if(this.live){
					eventBus.$emit('status',{
						x : this.x,
						y : this.y,
						status : this.live
					});
				}

				if(this.live && (this.is_live < 2 || this.is_live > 3) ){
                    console.log('vive');
                    this.live = !this.live;
                }
                else if(!this.live && this.is_live == 3 ){
                    console.log('muere')
                    this.live = !this.live;
                }
				//return{
				//	x: this.x,
				//	y: this.y,
				//	status: this.live
				//};
			},
		}
	}

</script>

<style>
	
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