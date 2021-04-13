<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Message;
class PrivateEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $mensagem;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chatprivate-channel.'.$this->mensagem->user_id);
    }
    public function boradcastWith()
    {
	    //retorno em array, objeto do banco vem em json tranforme json em array, se ja vier em array deixe como ta
	    return $this->mensagem->toArray();
        //return json_decode($this->mensagem, true);
    }
}
