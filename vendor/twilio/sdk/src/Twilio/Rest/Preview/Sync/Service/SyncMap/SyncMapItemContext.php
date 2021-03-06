<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Sync\Service\SyncMap;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class SyncMapItemContext extends InstanceContext {
    /**
     * Initialize the SyncMapItemContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The service_sid
     * @param string $mapSid The map_sid
     * @param string $key The key
     */
    public function __construct(Version $version, $serviceSid, $mapSid, $key) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'mapSid' => $mapSid, 'key' => $key, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Maps/' . \rawurlencode($mapSid) . '/Items/' . \rawurlencode($key) . '';
    }

    /**
     * Fetch the SyncMapItemInstance
     *
     * @return SyncMapItemInstance Fetched SyncMapItemInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncMapItemInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new SyncMapItemInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['mapSid'],
            $this->solution['key']
        );
    }

    /**
     * Delete the SyncMapItemInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Update the SyncMapItemInstance
     *
     * @param array $data The data
     * @return SyncMapItemInstance Updated SyncMapItemInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $data): SyncMapItemInstance {
        $data = Values::of(['Data' => Serialize::jsonObject($data), ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SyncMapItemInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['mapSid'],
            $this->solution['key']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Sync.SyncMapItemContext ' . \implode(' ', $context) . ']';
    }
}