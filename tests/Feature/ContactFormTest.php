<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_the_form_isn_t_sent_if_the_name_is_empty()
    {
        $response = $this->post('/contact', ['name'=>'', 'email'=> 'ceci@estun.email', 'subject'=>'Super site!','message'=>'Super site vraiment! Ça m\'a beaucoup plu' ]);
        $response->assertSessionHasErrors(['name'=>'Le champ nom est obligatoire.']);
    }

    public function test_the_form_isn_t_sent_if_the_email_is_empty()
    {
        $response = $this->post('/contact', ['name'=>'Un nom','email'=> '', 'subject'=>'Super site!','message'=>'Super site vraiment! Ça m\'a beaucoup plu' ]);
        $response->assertSessionHasErrors(['email'=>'Le champ adresse e-mail est obligatoire.']);
    }

    public function test_the_form_isn_t_sent_if_the_email_is_wrong()
    {
        $response = $this->post('/contact', ['name'=>'Un nom', 'email'=> 'cecinestpasunemail', 'subject'=>'Super site!','message'=>'Super site vraiment! Ça m\'a beaucoup plu' ]);
        $response->assertSessionHasErrors(['email'=>'Le champ adresse e-mail doit être une adresse e-mail valide.']);
    }

    public function test_the_form_isn_t_sent_if_the_subject_is_empty()
    {
        $response = $this->post('/contact', ['name'=>'Un nom','email'=> 'ceci@estun.email', 'subject'=>'','message'=>'Super site vraiment! Ça m\'a beaucoup plu' ]);
        $response->assertSessionHasErrors(['subject'=>'Le champ sujet est obligatoire.']);
    }


    public function test_the_form_isn_t_sent_if_the_message_is_empty()
    {
        $response = $this->post('/contact', ['name'=>'Un nom','email'=> 'ceci@estun.email', 'subject'=>'Super site!','message'=>'' ]);
        $response->assertSessionHasErrors(['message'=>'Le champ message est obligatoire.']);
    }
}
