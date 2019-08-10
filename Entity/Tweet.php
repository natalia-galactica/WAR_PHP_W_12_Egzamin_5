<?php
namespace ExamBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Tweet
 *
 * @ORM\Table(name="tweet")
 * @ORM\Entity(repositoryClass="ExamBundle\Repository\TweetRepository")
 */
class Tweet //klasa encji
{
    
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tweets")
     * @ORM\JoinColumn(name="idUsera", referencedColumnName="id")
     */
    private $user;    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tweet_text", type="string", length=255)
     */
    private $tweetText;    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set title
     *
     * @param string $title
     *
     * @return Tweet
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * Get tweetText
     *
     * @return string
     */
    public function getTweetText()
    {
        return $this->tweetText;
    }
    
    /**
     * Set tweetText
     *
     * @param string $tweetText
     *
     * @return Tweet
     */
    public function setTweetText($tweetText)
    {
        $this->tweetText = $tweetText;
        
        return $this;
    }
    
    /**
     * Get user
     *
     * @return \ExamBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set user
     *
     * @param \ExamBundle\Entity\User $user
     *
     * @return Tweet
     */
    public function setUser(\ExamBundle\Entity\User $user = null)
    {
        $this->user = $user;
        
        return $this;
    }
}
